#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Generates one PHP class per Schema.org type under src/Type/, from the
 * cached vocabulary snapshot in resources/schemaorg-current-https.jsonld.
 *
 * Scope: the core Schema.org vocabulary only -- the "pending", "attic"
 * (superseded), health-lifesci, bib, auto, and meta layers are excluded, as
 * is anything outside the schema: namespace (e.g. GS1, FIBO terms mixed
 * into the same graph), except for the small allowlist of pending terms in
 * INCLUDED_PENDING_TYPES. Re-run after refreshing the vocabulary snapshot.
 */

const VOCAB_PATH  = __DIR__ . '/../resources/schemaorg-current-https.jsonld';
const OUTPUT_DIR  = __DIR__ . '/../src/Type';
const NAMESPACE_  = 'DealNews\\SchemaOrg\\Type';
const EXCLUDED_LAYERS = [
    'pending',
    'health-lifesci',
    'bib.schema',
    'auto.schema',
    'meta.schema',
];

/**
 * Pending-layer terms included despite EXCLUDED_LAYERS: still tagged
 * pending upstream, but already the de facto range for a core property
 * (VirtualLocation is schema:location's documented range for virtual/
 * hybrid Events) and in wide real-world use.
 */
const INCLUDED_PENDING_TYPES = [
    'schema:VirtualLocation',
];

/**
 * Numeric/string base types that a DataType class or one of its ancestors
 * may resolve to. Anything DataType-ish not listed here (Text, URL, Date,
 * DateTime, Time, Quantity and its subtypes, ...) falls back to `string`,
 * since Moonspot\ValueObjects assigns raw scalars straight onto typed
 * properties with no casting hook -- a DateTimeImmutable property could
 * never be round-tripped through fromArray()/fromJson() without one.
 */
const DATA_TYPE_SCALARS = [
    'schema:Boolean' => 'bool',
    'schema:Integer' => 'int',
    'schema:Float'   => 'float',
    'schema:Number'  => 'int|float',
];

/**
 * Loads the vocabulary's @graph array from the cached snapshot.
 */
function load_graph(string $path): array {
    $decoded = json_decode(
        file_get_contents($path),
        true,
        flags: JSON_THROW_ON_ERROR,
    );

    return $decoded['@graph'];
}

/**
 * True if a vocabulary node belongs to a layer this generator skips:
 * a pending proposal, a retired/superseded term, or an opt-in extension.
 */
function is_excluded(array $node): bool {
    if (in_array($node['@id'] ?? '', INCLUDED_PENDING_TYPES, true)) {
        return false;
    }

    if (isset($node['schema:supersededBy'])) {
        return true;
    }

    $part_of = $node['schema:isPartOf'] ?? null;

    if ($part_of !== null) {
        $part_of_id = is_array($part_of) ? ($part_of['@id'] ?? '') : $part_of;

        foreach (EXCLUDED_LAYERS as $layer) {
            if (str_contains($part_of_id, $layer)) {
                return true;
            }
        }
    }

    return false;
}

/**
 * Normalizes a node's @type (a single string or a list) into a list.
 */
function type_list(array $node): array {
    $type = $node['@type'] ?? [];

    return is_array($type) ? $type : [$type];
}

/**
 * Normalizes an @id reference or list of references (as found in
 * rdfs:subClassOf, schema:domainIncludes, schema:rangeIncludes) into a
 * flat list of id strings.
 */
function ref_list(mixed $value): array {
    if ($value === null) {
        return [];
    }

    if (isset($value['@id'])) {
        return [$value['@id']];
    }

    $ids = [];

    foreach ($value as $item) {
        if (isset($item['@id'])) {
            $ids[] = $item['@id'];
        }
    }

    return $ids;
}

/**
 * Strips the "schema:" prefix off a vocabulary id.
 */
function local_name(string $id): string {
    return substr($id, strlen('schema:'));
}

/**
 * Extracts a plain-text rdfs:comment, which may be a bare string or an
 * rdf:HTML/language-tagged value object.
 */
function comment_text(array $node): string {
    $comment = $node['rdfs:comment'] ?? '';

    if (is_array($comment)) {
        $comment = $comment['@value'] ?? '';
    }

    // Some vocabulary comments contain a literal backslash-n (two chars)
    // rather than an actual newline -- normalize so wordwrap() treats them
    // as paragraph breaks.
    $comment = str_replace('\\n', "\n", (string) $comment);

    return html_to_text($comment);
}

/**
 * Converts an rdfs:comment's HTML fragment (schema.org authors comments as
 * HTML -- links, <code>, <p>/<br>, <ul>/<li>) into plain text suitable for a
 * docblock, decoding entities along the way. Unrecognized tags are dropped,
 * keeping their contents.
 */
function html_to_text(string $html): string {
    if (trim($html) === '') {
        return '';
    }

    $dom = new \DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML(
        '<?xml encoding="utf-8"?><div>' . $html . '</div>',
        LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD,
    );
    libxml_clear_errors();

    $root = $dom->getElementsByTagName('div')->item(0);
    $text = $root !== null ? html_node_to_text($root) : $html;

    // Adjacent <p>/<li> conversions can leave runs of blank lines or
    // trailing spaces before a break -- tidy those up.
    $text = preg_replace('/[ \t]+\n/', "\n", $text);
    $text = preg_replace('/\n{3,}/', "\n\n", $text);

    return trim($text);
}

/**
 * Recursively renders one DOM node (and its children) as plain text, per
 * html_to_text()'s tag conventions: <br> and <p> become line/paragraph
 * breaks, <li> becomes a "- " bulleted line, <code> becomes `backticks`,
 * and <a href="URL"> becomes "text (URL)". Any other element (<ul>, <ol>,
 * or a tag not in this vocabulary's comments today) is unwrapped, keeping
 * only its children's text.
 */
function html_node_to_text(\DOMNode $node): string {
    if ($node instanceof \DOMText) {
        return $node->textContent;
    }

    if (!($node instanceof \DOMElement)) {
        return '';
    }

    $inner = '';

    foreach ($node->childNodes as $child) {
        $inner .= html_node_to_text($child);
    }

    return match (strtolower($node->tagName)) {
        'br' => "\n",
        'p' => "\n\n" . trim($inner) . "\n\n",
        'li' => "\n- " . trim($inner),
        'code' => '`' . trim($inner) . '`',
        'a' => trim($inner) . (
            $node->getAttribute('href') !== ''
                ? ' (' . $node->getAttribute('href') . ')'
                : ''
        ),
        default => $inner,
    };
}

/**
 * Walks the vocabulary once, splitting core nodes into classes,
 * properties, and enumeration individuals.
 *
 * @return array{classes: array, properties: array, individuals: array}
 */
function build_index(array $graph): array {
    $classes    = [];
    $properties = [];

    foreach ($graph as $node) {
        $id = $node['@id'] ?? '';

        if (!str_starts_with($id, 'schema:') || is_excluded($node)) {
            continue;
        }

        $types = type_list($node);

        if (in_array('rdfs:Class', $types, true)) {
            $classes[$id] = [
                'name'    => local_name($id),
                'comment' => comment_text($node),
                'parents' => ref_list($node['rdfs:subClassOf'] ?? null),
                'is_data_type' => in_array('schema:DataType', $types, true),
            ];
        } elseif (in_array('rdf:Property', $types, true)) {
            $properties[$id] = [
                'name'    => local_name($id),
                'comment' => comment_text($node),
                'domains' => ref_list($node['schema:domainIncludes'] ?? null),
                'ranges'  => ref_list($node['schema:rangeIncludes'] ?? null),
            ];
        }
    }

    $individuals = [];

    foreach ($graph as $node) {
        $id = $node['@id'] ?? '';

        if (!str_starts_with($id, 'schema:') || is_excluded($node)) {
            continue;
        }

        $types = array_intersect(type_list($node), array_keys($classes));

        foreach ($types as $class_id) {
            $individuals[$class_id][] = local_name($id);
        }
    }

    return [
        'classes'     => $classes,
        'properties'  => $properties,
        'individuals' => $individuals,
    ];
}

/**
 * Returns a class id and all of its ancestors (via rdfs:subClassOf),
 * following every listed parent -- Schema.org's class graph is a DAG, not
 * a tree. External/excluded parents (outside $classes) are ignored.
 */
function ancestors(string $class_id, array $classes, array &$memo): array {
    if (isset($memo[$class_id])) {
        return $memo[$class_id];
    }

    $result = [$class_id];

    foreach ($classes[$class_id]['parents'] ?? [] as $parent_id) {
        if (isset($classes[$parent_id])) {
            $result = array_merge(
                $result,
                ancestors($parent_id, $classes, $memo),
            );
        }
    }

    $result = array_values(array_unique($result));
    $memo[$class_id] = $result;

    return $result;
}

/**
 * Class ids that are Schema.org DataTypes or a descendant of one (Text,
 * URL, Number, Integer, Date, Quantity, Duration, ...). These map to PHP
 * scalars instead of generated classes.
 */
function data_type_ids(array $classes): array {
    $memo = [];
    $ids  = [];

    foreach ($classes as $id => $class) {
        if ($class['is_data_type']) {
            $ids[$id] = true;
            continue;
        }

        foreach (ancestors($id, $classes, $memo) as $ancestor_id) {
            if ($classes[$ancestor_id]['is_data_type'] ?? false) {
                $ids[$id] = true;
                break;
            }
        }
    }

    return $ids;
}

/**
 * Class ids that are Schema.org's Enumeration class or a descendant of it
 * (GenderType, ItemAvailability, DayOfWeek, ...). Their instances are
 * transmitted as plain IRI strings in JSON-LD, so they map to PHP
 * `string` wherever they appear as a property range; the generated class
 * itself carries its known members as string constants.
 */
function enum_type_ids(array $classes): array {
    $memo = [];
    $ids  = [];

    foreach ($classes as $id => $class) {
        $class_ancestors = ancestors($id, $classes, $memo);

        if (in_array('schema:Enumeration', $class_ancestors, true)) {
            $ids[$id] = true;
        }
    }

    return $ids;
}

/**
 * Maps a DataType class id to its PHP scalar type, defaulting to `string`
 * for every DataType with no more specific mapping (see DATA_TYPE_SCALARS).
 */
function data_type_scalar(
    string $class_id,
    array $classes,
    array &$ancestor_memo,
): string {
    if (isset(DATA_TYPE_SCALARS[$class_id])) {
        return DATA_TYPE_SCALARS[$class_id];
    }

    foreach (ancestors($class_id, $classes, $ancestor_memo) as $ancestor_id) {
        if (isset(DATA_TYPE_SCALARS[$ancestor_id])) {
            return DATA_TYPE_SCALARS[$ancestor_id];
        }
    }

    return 'string';
}

/**
 * Converts a PascalCase individual name (e.g. "InStock") into a
 * SCREAMING_SNAKE_CASE constant name ("IN_STOCK").
 */
function to_const_name(string $name): string {
    $name = preg_replace('/([a-z0-9])([A-Z])/', '$1_$2', $name);
    $name = preg_replace('/([A-Z]+)([A-Z][a-z])/', '$1_$2', $name);

    return strtoupper($name);
}

/**
 * Builds a domain class id => [property id, ...] index, so a class's
 * applicable properties can be gathered without scanning every property
 * for every class.
 */
function properties_by_domain(array $properties): array {
    $index = [];

    foreach ($properties as $property_id => $property) {
        foreach ($property['domains'] as $domain_id) {
            $index[$domain_id][] = $property_id;
        }
    }

    return $index;
}

/**
 * The first listed parent that is itself a core class, used for `extends`.
 * A class with none (Thing, or one whose only parents were filtered out)
 * extends JsonLdNode directly.
 */
function primary_parent(array $class, array $classes): ?string {
    foreach ($class['parents'] as $parent_id) {
        if (isset($classes[$parent_id])) {
            return $parent_id;
        }
    }

    return null;
}

/**
 * Resolves one property's Schema.org rangeIncludes into the list of
 * single-value PHP types it accepts (class names and/or scalars), with no
 * `array`/`null` yet appended. Shared by property_php_type() (the actual
 * declared type) and property_phpdoc_type() (the `@var` hint).
 */
function property_type_parts(
    array $property,
    array $classes,
    array $data_types,
    array $enum_types,
    array &$ancestor_memo,
): array {
    $parts = [];

    foreach ($property['ranges'] as $range_id) {
        if (isset($data_types[$range_id])) {
            $scalar = data_type_scalar($range_id, $classes, $ancestor_memo);
        } elseif (isset($enum_types[$range_id])) {
            $scalar = 'string';
        } elseif (isset($classes[$range_id])) {
            $scalar = $classes[$range_id]['name'];
        } else {
            // Range points outside the core vocabulary (e.g. a pending-only
            // type) -- fall back to string rather than reference a class
            // that won't exist.
            $scalar = 'string';
        }

        foreach (explode('|', $scalar) as $part) {
            if (!in_array($part, $parts, true)) {
                $parts[] = $part;
            }
        }
    }

    return $parts;
}

/**
 * Resolves one property's Schema.org rangeIncludes into a PHP union type,
 * always allowing a bare array (multiple values) and null (unset).
 * Schema.org itself places no cardinality limit on any property, and
 * Moonspot\ValueObjects has no dedicated single-vs-many property variant,
 * so `|array` is added uniformly rather than per-property.
 */
function property_php_type(
    array $property,
    array $classes,
    array $data_types,
    array $enum_types,
    array &$ancestor_memo,
): string {
    $parts = property_type_parts(
        $property,
        $classes,
        $data_types,
        $enum_types,
        $ancestor_memo,
    );

    if (!in_array('array', $parts, true)) {
        $parts[] = 'array';
    }

    $parts[] = 'null';

    return implode('|', $parts);
}

/**
 * Renders the `@var` hint for one property. Widens property_php_type()'s
 * bare `array` into a `Type[]` alternative per accepted type (standard
 * PHPDoc convention for array element types) -- e.g. `AggregateRating|
 * AggregateRating[]|null` instead of `AggregateRating|array|null`. This is
 * documentation only: nothing at runtime checks that an array actually
 * holds only these types (see README/CLAUDE.md's "array element types
 * aren't enforced" note) -- it just gives IDEs and readers the intended
 * element type instead of a bare `array`.
 */
function property_phpdoc_type(
    array $property,
    array $classes,
    array $data_types,
    array $enum_types,
    array &$ancestor_memo,
): string {
    $parts = property_type_parts(
        $property,
        $classes,
        $data_types,
        $enum_types,
        $ancestor_memo,
    );

    $doc_parts = $parts;

    foreach ($parts as $part) {
        $doc_parts[] = $part . '[]';
    }

    $doc_parts[] = 'null';

    return implode('|', $doc_parts);
}

/**
 * Word-wraps and re-indents free text as the body lines of a docblock.
 */
function doc_lines(string $text, string $indent): string {
    if ($text === '') {
        return '';
    }

    $text  = str_replace('*/', '* /', $text);
    $lines = explode("\n", wordwrap($text, 76, "\n"));
    $out   = [];

    foreach ($lines as $line) {
        $out[] = rtrim($indent . ' * ' . $line);
    }

    return implode("\n", $out) . "\n";
}

/**
 * Renders one generated class's full PHP source.
 */
function render_class(
    string $class_id,
    array $classes,
    array $properties_by_domain_index,
    array $properties,
    array $data_types,
    array $enum_types,
    array $individuals,
    array &$ancestor_memo,
): string {
    $class      = $classes[$class_id];
    $name       = $class['name'];
    $parent_id  = primary_parent($class, $classes);
    $parent_name = $parent_id !== null ? $classes[$parent_id]['name'] : null;

    $own_property_ids = [];

    foreach (ancestors($class_id, $classes, $ancestor_memo) as $ancestor_id) {
        $domain_property_ids = $properties_by_domain_index[$ancestor_id] ?? [];

        foreach ($domain_property_ids as $property_id) {
            $own_property_ids[$property_id] = true;
        }
    }

    // Properties reachable through the primary parent are already available
    // via normal PHP inheritance (that class declares them, by the same
    // rule, applied recursively down to Thing). Only the delta -- this
    // class's own properties plus anything reachable only through a
    // secondary parent -- needs to be declared here.
    if ($parent_id !== null) {
        $parent_ancestor_ids = ancestors($parent_id, $classes, $ancestor_memo);

        foreach ($parent_ancestor_ids as $ancestor_id) {
            $domain_property_ids =
                $properties_by_domain_index[$ancestor_id] ?? [];

            foreach ($domain_property_ids as $property_id) {
                unset($own_property_ids[$property_id]);
            }
        }
    }

    $property_names = [];

    foreach (array_keys($own_property_ids) as $property_id) {
        $property_names[$properties[$property_id]['name']] = $property_id;
    }

    ksort($property_names);

    $lines   = [];
    $lines[] = '<?php';
    $lines[] = '';
    $lines[] = 'declare(strict_types=1);';
    $lines[] = '';
    $lines[] = 'namespace ' . NAMESPACE_ . ';';
    $lines[] = '';

    if ($parent_name === null) {
        $lines[] = 'use DealNews\\SchemaOrg\\JsonLdNode;';
        $lines[] = '';
    }

    $lines[] = '/**';
    $lines[] = ' * ' . $name . '.';

    if ($class['comment'] !== '') {
        $lines[] = ' *';
        $lines[] = rtrim(doc_lines($class['comment'], ''));
    }

    $lines[] = ' *';
    $lines[] = ' * @see https://schema.org/' . $name;
    $lines[] = ' */';
    $extends = $parent_name ?? 'JsonLdNode';
    $lines[] = 'class ' . $name . ' extends ' . $extends . ' {';
    $lines[] = '';
    $lines[] = '    public const SCHEMA_TYPE = \'' . $name . '\';';

    $member_names = $individuals[$class_id] ?? [];
    sort($member_names);

    if ($member_names !== []) {
        $lines[] = '';

        foreach ($member_names as $member_name) {
            $lines[] = '    public const ' . to_const_name($member_name) .
                ' = \'https://schema.org/' . $member_name . '\';';
        }
    }

    foreach ($property_names as $property_name => $property_id) {
        $property = $properties[$property_id];
        $php_type = property_php_type(
            $property,
            $classes,
            $data_types,
            $enum_types,
            $ancestor_memo,
        );
        $phpdoc_type = property_phpdoc_type(
            $property,
            $classes,
            $data_types,
            $enum_types,
            $ancestor_memo,
        );

        $lines[] = '';
        $lines[] = '    /**';

        if ($property['comment'] !== '') {
            $lines[] = rtrim(doc_lines($property['comment'], '    '));
            $lines[] = '     *';
        }

        $lines[] = '     * @var ' . $phpdoc_type;
        $lines[] = '     *';
        $lines[] = '     * @see https://schema.org/' . $property_name;
        $lines[] = '     */';
        $lines[] = '    public ' . $php_type . ' $' . $property_name .
            ' = null;';
    }

    $lines[] = '}';
    $lines[] = '';

    return implode("\n", $lines);
}

function main(): void {
    $graph = load_graph(VOCAB_PATH);
    $index = build_index($graph);

    $classes    = $index['classes'];
    $properties = $index['properties'];
    $individuals = $index['individuals'];

    $data_types = data_type_ids($classes);
    $enum_types = enum_type_ids($classes);
    $domain_index = properties_by_domain($properties);

    if (!is_dir(OUTPUT_DIR)) {
        mkdir(OUTPUT_DIR, 0755, true);
    }

    foreach (glob(OUTPUT_DIR . '/*.php') as $existing_file) {
        unlink($existing_file);
    }

    $ancestor_memo = [];
    $generated     = 0;

    foreach ($classes as $class_id => $class) {
        if ($data_types[$class_id] ?? false) {
            continue;
        }

        $source = render_class(
            $class_id,
            $classes,
            $domain_index,
            $properties,
            $data_types,
            $enum_types,
            $individuals,
            $ancestor_memo,
        );

        file_put_contents(OUTPUT_DIR . '/' . $class['name'] . '.php', $source);
        $generated++;
    }

    fwrite(STDERR, "Generated {$generated} classes into " . OUTPUT_DIR . "\n");
}

main();

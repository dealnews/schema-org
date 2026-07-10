<?php

namespace DealNews\SchemaOrg;

use Moonspot\ValueObjects\Interfaces\Export;
use Moonspot\ValueObjects\ValueObject;

/**
 * Base class for every generated Schema.org type.
 *
 * Adds JSON-LD shaping on top of Moonspot\ValueObjects\ValueObject: an
 * @id-mapped $id property, an injected @type, omission of properties left
 * at their null/empty default, and an @context that appears only once, at
 * the root of a serialized graph (nested nodes never repeat it since
 * toArray() -- used for both nesting and the Export contract -- never adds
 * it; only jsonSerialize()/toJsonLd(), which are only ever called on the
 * outermost object, do).
 */
abstract class JsonLdNode extends ValueObject {

    /**
     * The Schema.org type name emitted as @type. Overridden by every
     * generated subclass.
     */
    public const SCHEMA_TYPE = 'Thing';

    public const CONTEXT = 'https://schema.org';

    /**
     * Maps to the JSON-LD @id keyword: a URI identifying this node.
     */
    public ?string $id = null;

    /**
     * @return array Array representation of the object, keyed by Schema.org
     *               property name, with @type (and @id, if set) included.
     *               Never includes @context -- see toJsonLd() for that.
     */
    public function toArray(?array $data = null): array {
        $data ??= get_object_vars($this);
        unset($data['id']);

        $out = ['@type' => static::SCHEMA_TYPE];

        if ($this->id !== null && $this->id !== '') {
            $out['@id'] = $this->id;
        }

        foreach ($data as $key => $value) {
            $value = $this->exportValue($value);

            if ($value === null || $value === '' || $value === []) {
                continue;
            }

            $out[$key] = $value;
        }

        return $out;
    }

    /**
     * Recursively converts a property value into its plain-array/scalar
     * JSON-LD representation, dropping empty entries out of any
     * multi-value (array-typed) property along the way.
     */
    private function exportValue(mixed $value): mixed {
        if (is_object($value)) {
            if ($value instanceof Export) {
                return $value->toArray();
            }

            if ($value instanceof \JsonSerializable) {
                return $value->jsonSerialize();
            }

            throw new \LogicException(
                get_class($value) .
                    ' does not implement Export or JsonSerializable',
            );
        }

        if (is_array($value)) {
            $out = [];

            foreach ($value as $v) {
                $v = $this->exportValue($v);

                if ($v === null || $v === '' || $v === []) {
                    continue;
                }

                $out[] = $v;
            }

            return $out;
        }

        return $value;
    }

    /**
     * Invoked automatically by json_encode(). Since nested nodes are
     * always exported via toArray() (see exportValue()), this only ever
     * runs for the outermost object, so it's the one place @context
     * belongs.
     */
    public function jsonSerialize(): array {
        return $this->toJsonLd();
    }

    public function toJson(): string {
        return json_encode(
            $this->jsonSerialize(),
            JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE,
        );
    }

    /**
     * @return array This node's full JSON-LD representation, including
     *               @context.
     */
    public function toJsonLd(): array {
        return ['@context' => static::CONTEXT] + $this->toArray();
    }

    public function toJsonLdString(bool $pretty = false): string {
        $flags = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;

        if ($pretty) {
            $flags |= JSON_PRETTY_PRINT;
        }

        return json_encode($this->toJsonLd(), $flags);
    }

    /**
     * Renders this node as a ready-to-embed
     * <script type="application/ld+json"> tag. Uses
     * JSON_HEX_TAG/JSON_HEX_AMP so untrusted property values (e.g. a
     * product name containing "</script>") can't break out of the tag.
     */
    public function toJsonLdScriptTag(bool $pretty = false): string {
        $flags = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE |
            JSON_HEX_TAG | JSON_HEX_AMP;

        if ($pretty) {
            $flags |= JSON_PRETTY_PRINT;
        }

        $json = json_encode($this->toJsonLd(), $flags);

        return '<script type="application/ld+json">' . $json . '</script>';
    }
}

<?php

namespace MacFJA\PolyFillRegistry;

/**
 * Polyfill entry implementation
 *
 * @author  MacFJA
 * @license MIT
 */
class PolyfillEntry implements EntryInterface
{
    /** @var array */
    private $jsonData = array();

    /**
     * Get the type (see constants) of the entry
     *
     * @return string
     */
    public function getType()
    {
        $type = $this->getValue('type', self::TYPE_UNKNOWN);

        if (!in_array($type, array(self::TYPE_POLYFILL, self::TYPE_STUB, self::TYPE_ALTERNATIVE), true)) {
            return self::TYPE_UNKNOWN;
        }

        return $type;
    }

    /**
     * @param string $path
     * @param mixed $default
     * @return mixed
     * @codeCoverageIgnore
     */
    private function getValue($path, $default)
    {
        if (!is_array($this->jsonData) || !array_key_exists($path, $this->jsonData)) {
            return $default;
        }

        return $this->jsonData[$path];
    }

    /**
     * @param array $jsonArray
     *
     * @return void
     */
    public function parseData($jsonArray)
    {
        $this->jsonData = $jsonArray;
    }

    /**
     * Get the name of the entry (mostly composer package)
     *
     * @return string
     */
    public function getName()
    {
        return $this->getValue('name', '');
    }

    /**
     * @param array $jsonArray
     * @return static
     * @codeCoverageIgnore
     */
    public static function createFromJson($jsonArray)
    {
        $entry = new static();
        $entry->parseData($jsonArray);
        return $entry;
    }

    /**
     * Indicate if the entry can replace an extension
     *
     * @param string $name The name of the extension.
     * @return bool
     */
    public function canReplaceExtension($name)
    {
        $replace = $this->getValue(self::JSON_KEY_REPLACE, array());

        if (strpos($name, 'ext-') === 0 || strpos($name, 'pecl-') === 0) {
            return array_key_exists($name, $replace);
        }

        $extName = 'ext-' . $name;
        $peclName = 'pecl-' . $name;

        return array_key_exists($extName, $replace) || array_key_exists($peclName, $replace);
    }

    /**
     * Indicate if the entry can replace a PHP version
     *
     * @param string $version The PHP version
     * @return bool
     */
    public function canReplacePhp($version)
    {
        $replace = $this->getValue(self::JSON_KEY_REPLACE, array());
        if (!array_key_exists('php', $replace)) {
            return false;
        }
        $replaceVersion = $replace['php'];

        $replaceVersion;

        throw new \BadMethodCallException('Not yet implemented');
    }

    /**
     * Get the list of functions defined in the entry
     *
     * @return string[]
     */
    public function getFunctions()
    {
        return $this->getValue(self::JSON_KEY_FUNCTIONS, array());
    }

    /**
     * Get the list of constants defined in the entry
     *
     * @return string[]
     */
    public function getConstants()
    {
        return $this->getValue(self::JSON_KEY_CONSTANTS, array());
    }

    /**
     * Get the list of classes defined in the entry
     *
     * @return string[]
     */
    public function getClasses()
    {
        return $this->getValue(self::JSON_KEY_CLASSES, array());
    }

    /**
     * Get the list of extensions that the entry can replace
     *
     * @return string[]
     */
    public function getReplacedExtensions()
    {
        $replace = $this->getValue(self::JSON_KEY_REPLACE, array());
        /** @var string[] $extensions */
        $extensions = array_keys($replace);
        return array_filter(
            $extensions,
            /**
             * @internal
             * @param string $item
             * @return bool
             */
            function ($item) {
                return strpos($item, 'ext-') === 0 || strpos($item, 'pecl-') === 0;
            }
        );
    }
}

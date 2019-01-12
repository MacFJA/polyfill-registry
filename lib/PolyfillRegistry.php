<?php

namespace MacFJA\PolyFillRegistry;

/**
 * Polyfill reader implementation
 *
 * @author  MacFJA
 * @license MIT
 */
class PolyfillRegistry implements ReaderInterface, ReverseSearchInterface
{
    /** @var array|null */
    private $registry;

    public function getPolyfillForExtension($name)
    {
        if (strpos($name, 'ext-') === 0) {
            $name = substr($name, 4);
        }
        if (strpos($name, 'pecl-') === 0) {
            $name = substr($name, 5);
        }
        return $this->filter(
            $this->getRegistry(),
            /**
             * @param array $row
             * @return bool
             */
            function ($row) use ($name) {
                if (!array_key_exists('replace', $row)) {
                    return false;
                }
                return array_key_exists('ext-'.$name, $row['replace'])
                    || array_key_exists('pecl-'.$name, $row['replace']);
            }
        );
    }

    /**
     * @param array $registry
     * @param callable $filter
     * @return PolyfillEntry[]
     *
     * @codeCoverageIgnore
     */
    private function filter($registry, $filter)
    {
        $entries = array_filter($registry, $filter);

        $entries = array_map(
            /**
             * @param array $item
             * @return PolyfillEntry
             */
            function ($item) {
                return PolyfillEntry::createFromJson($item);
            },
            $entries
        );

        return $entries;
    }

    public function getPolyfillForFunction($name)
    {
        $entries = $this->filter(
            $this->getRegistry(),
            /**
             * @param array $row
             * @return bool
             */
            function ($row) use ($name) {
                if (!array_key_exists('functions', $row)) {
                    return false;
                }
                return in_array($name, $row['functions'], true);
            }
        );

        return $entries;
    }

    /**
     * @param string $file
     * @return array
     * @codeCoverageIgnore
     */
    private function getJson($file)
    {
        $stringContent = @file_get_contents($file);

        if ($stringContent === false) {
            return array();
        }

        $json = @json_decode($stringContent, true);

        if ($json === false || $json === null) {
            return array();
        }

        return $json;
    }

    /**
     * @codeCoverageIgnore
     * @return array
     */
    private function getRegistry()
    {
        if ($this->registry === null) {
            $this->setRegistry(__DIR__.'/../resources/registry.json');
            /** @var array $this->registry */
        }
        return $this->registry;
    }

    public function getPolyfillForClass($name)
    {
        $entries = $this->filter(
            $this->getRegistry(),
            /**
             * @param array $row
             * @return bool
             */
            function ($row) use ($name) {
                if (!array_key_exists('classes', $row)) {
                    return false;
                }
                return in_array($name, $row['classes'], true);
            }
        );

        return $entries;
    }

    public function setRegistry($filename)
    {
        $this->registry = $this->getJson($filename);
    }

    /**
     * @param string $version
     * @return EntryInterface[]
     */
    public function getPolyfillForPhp($version)
    {
        throw new \BadMethodCallException('Not Yet Implemented');
    }

    /**
     * @param string $name
     * @return EntryInterface[]
     */
    public function getPolyfillForConstant($name)
    {
        $entries = $this->filter(
            $this->getRegistry(),
            /**
             * @param array $row
             * @return bool
             */
            function ($row) use ($name) {
                if (!array_key_exists('constants', $row)) {
                    return false;
                }
                return in_array($name, $row['constants'], true);
            }
        );

        return $entries;
    }

    /**
     * @param string $name
     * @return null|EntryInterface
     */
    private function getPolyfillWithName($name)
    {
        $polyfill = $this->filter(
            $this->getRegistry(),
            /**
             * @param array $row
             * @return bool
             */
            function ($row) use ($name) {
                return $row['name'] === $name;
            }
        );

        if (count($polyfill) === 0) {
            return null;
        }

        return reset($polyfill);
    }

    /**
     * Indicate if the provided name is a polyfill
     *
     * @param string $name The name to search (mostly composer package)
     * @return bool
     */
    public function isPolyfill($name)
    {
        return $this->getPolyfillWithName($name) !== null;
    }

    /**
     * Get the list of functions of a polyfill.
     * Return an empty array if the provided name is not a polyfill.
     *
     * @param string $name The name of polyfill (mostly composer package)
     * @return string[]
     */
    public function getPolyfillFunctions($name)
    {
        $polyfill = $this->getPolyfillWithName($name);
        if ($polyfill === null) {
            return array();
        }

        return $polyfill->getFunctions();
    }

    /**
     * Get the list of classes of a polyfill.
     * Return an empty array if the provided name is not a polyfill.
     *
     * @param string $name The name of polyfill (mostly composer package)
     * @return string[]
     */
    public function getPolyfillClasses($name)
    {
        $polyfill = $this->getPolyfillWithName($name);
        if ($polyfill === null) {
            return array();
        }

        return $polyfill->getClasses();
    }

    /**
     * Get the list of constants of a polyfill.
     * Return an empty array if the provided name is not a polyfill.
     *
     * @param string $name The name of polyfill (mostly composer package)
     * @return string[]
     */
    public function getPolyfillConstants($name)
    {
        $polyfill = $this->getPolyfillWithName($name);
        if ($polyfill === null) {
            return array();
        }

        return $polyfill->getConstants();
    }

    /**
     * Get the list of replaced extensions of a polyfill.
     * Return an empty array if the provided name is not a polyfill.
     *
     * @param string $name The name of polyfill (mostly composer package)
     * @return string[]
     */
    public function getPolyfillExtensions($name)
    {
        $polyfill = $this->getPolyfillWithName($name);
        if ($polyfill === null) {
            return array();
        }

        return $polyfill->getReplacedExtensions();
    }
}

<?php

namespace MacFJA\PolyFillRegistry;

/**
 * Search data from a polyfill name
 *
 * @author  MacFJA
 * @license MIT
 */
interface ReverseSearchInterface
{
    /**
     * Indicate if the provided name is a polyfill
     *
     * @param string $name The name to search (mostly composer package)
     * @return bool
     */
    public function isPolyfill($name);

    /**
     * Get the list of functions of a polyfill.
     * Return an empty array if the provided name is not a polyfill.
     *
     * @param string $name The name of polyfill (mostly composer package)
     * @return string[]
     */
    public function getPolyfillFunctions($name);
    /**
     * Get the list of classes of a polyfill.
     * Return an empty array if the provided name is not a polyfill.
     *
     * @param string $name The name of polyfill (mostly composer package)
     * @return string[]
     */
    public function getPolyfillClasses($name);
    /**
     * Get the list of constants of a polyfill.
     * Return an empty array if the provided name is not a polyfill.
     *
     * @param string $name The name of polyfill (mostly composer package)
     * @return string[]
     */
    public function getPolyfillConstants($name);
    /**
     * Get the list of replaced extensions of a polyfill.
     * Return an empty array if the provided name is not a polyfill.
     *
     * @param string $name The name of polyfill (mostly composer package)
     * @return string[]
     */
    public function getPolyfillExtensions($name);
}

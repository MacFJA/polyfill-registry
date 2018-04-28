<?php

namespace MacFJA\PolyFillRegistry;

/**
 * Interface to define how read a polyfill registry
 *
 * @author  MacFJA
 * @license MIT
 */
interface ReaderInterface
{
    /**
     * Get the list of polyfill that can replace an extension
     *
     * @param string $name The name of the extension.
     * @return EntryInterface[]
     */
    public function getPolyfillForExtension($name);
    /**
     * Get the list of polyfill that can replace a function
     *
     * @param string $name The name of the function
     * @return EntryInterface[]
     */
    public function getPolyfillForFunction($name);
    /**
     * Get the list of polyfill that can replace a class
     *
     * @param string $name The name of the class
     * @return EntryInterface[]
     */
    public function getPolyfillForClass($name);
    /**
     * Get the list of polyfill that can replace a constant
     *
     * @param string $name The name of the constant
     * @return EntryInterface[]
     */
    public function getPolyfillForConstant($name);
    /**
     * Get the list of polyfill that can replace a php version
     *
     * @param string $version The version number (in X.Y.Z format)
     * @return EntryInterface[]
     */
    public function getPolyfillForPhp($version);

    /**
     * Set the path to the registry file
     *
     * @param string $filename The path where to load data
     * @return void
     */
    public function setRegistry($filename);
}

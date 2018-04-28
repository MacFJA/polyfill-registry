<?php

namespace MacFJA\PolyFillRegistry;

/**
 * Interface to represent a polyfill entry
 *
 * @author  MacFJA
 * @license MIT
 */
interface EntryInterface
{
    const TYPE_POLYFILL = 'polyfill';
    const TYPE_STUB = 'stub';
    const TYPE_ALTERNATIVE = 'alternative';
    const TYPE_UNKNOWN = '?';

    const JSON_KEY_REPLACE = 'replace';
    const JSON_KEY_FUNCTIONS = 'functions';
    const JSON_KEY_CLASSES = 'classes';
    const JSON_KEY_CONSTANTS = 'constants';

    /**
     * Get the name of the entry (mostly composer package)
     * @return string
     */
    public function getName();

    /**
     * Get the type (see constants) of the entry
     * @return string
     */
    public function getType();

    /**
     * Indicate if the entry can replace an extension
     * @param string $name The name of the extension.
     * @return bool
     */
    public function canReplaceExtension($name);

    /**
     * Indicate if the entry can replace a PHP version
     * @param string $version The PHP version
     * @return bool
     */
    public function canReplacePhp($version);

    /**
     * Get the list of extensions that the entry can replace
     * @return string[]
     */
    public function getReplacedExtensions();

    /**
     * Get the list of functions defined in the entry
     * @return string[]
     */
    public function getFunctions();

    /**
     * Get the list of constants defined in the entry
     * @return string[]
     */
    public function getConstants();

    /**
     * Get the list of classes defined in the entry
     * @return string[]
     */
    public function getClasses();
}

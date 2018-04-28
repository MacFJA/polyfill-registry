<?php

namespace MacFJA\PolyFillRegistry\Tests;

use MacFJA\PolyFillRegistry\EntryInterface;
use MacFJA\PolyFillRegistry\PolyfillEntry;
use PHPUnit\Framework\TestCase;

/**
 * Unit Test for the EntryInterface
 *
 * @author  MacFJA
 * @license MIT
 */
class EntryTest extends TestCase
{
    /**
     * @param $inputJson
     * @param $expectedType
     * @dataProvider provider
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry::getType()
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry::parseData()
     */
    public function testGetType($inputJson, $expectedType)
    {
        $entry = $this->prepareEntry($inputJson);

        static::assertEquals($expectedType, $entry->getType());
    }

    /**
     * @param $inputJson
     * @param $expectedName
     * @dataProvider provider
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry::getName()
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry::parseData()
     */
    public function testGetName($inputJson, $expectedName)
    {
        $entry = $this->prepareEntry($inputJson);

        static::assertEquals($expectedName, $entry->getName());
    }

    /**
     * @param $inputJson
     * @param $expectedFunctions
     * @dataProvider provider
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry::getFunctions()
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry::parseData()
     */
    public function testGetFunctions($inputJson, $expectedFunctions)
    {
        $entry = $this->prepareEntry($inputJson);

        static::assertEquals($expectedFunctions, $entry->getFunctions());
    }

    /**
     * @param $inputJson
     * @param $expectedClasses
     * @dataProvider provider
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry::getClasses()
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry::parseData()
     */
    public function testGetClasses($inputJson, $expectedClasses)
    {
        $entry = $this->prepareEntry($inputJson);

        static::assertEquals($expectedClasses, $entry->getClasses());
    }

    /**
     * @param $inputJson
     * @param $expectedConstants
     * @dataProvider provider
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry::getConstants()
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry::parseData()
     */
    public function testGetConstants($inputJson, $expectedConstants)
    {
        $entry = $this->prepareEntry($inputJson);

        static::assertEquals($expectedConstants, $entry->getConstants());
    }

    /**
     * @param $inputJson
     * @param $dependency
     * @param $expectedBool
     * @dataProvider provider
     * @covers       \MacFJA\PolyFillRegistry\PolyfillEntry::canReplaceExtension()
     * @covers       \MacFJA\PolyFillRegistry\PolyfillEntry::parseData()
     */
    public function testCanReplace($inputJson, $dependency, $expectedBool)
    {
        $entry = $this->prepareEntry($inputJson);

        static::assertEquals($expectedBool, $entry->canReplaceExtension($dependency));
    }

    /**
     * @param $inputJson
     * @param $expectedExtensions
     * @dataProvider provider
     * @covers       \MacFJA\PolyFillRegistry\PolyfillEntry::getReplacedExtensions()
     * @covers       \MacFJA\PolyFillRegistry\PolyfillEntry::parseData()
     */
    public function testGetReplacedExtensions($inputJson, $expectedExtensions)
    {
        $entry = $this->prepareEntry($inputJson);

        static::assertEquals($expectedExtensions, $entry->getReplacedExtensions());
    }

    /**
     * @param string $inputJson
     * @return EntryInterface
     */
    private function prepareEntry($inputJson)
    {
        $entry = new PolyfillEntry();
        $entry->parseData(@json_decode($inputJson, true));

        return $entry;
    }

    public function provider($testName)
    {
        if ($testName === 'testGetType') {
            return array(
                array('{"type": "polyfill"}', 'polyfill'),
                array('{"type": "alternative"}', 'alternative'),
                array('{"type": "stub"}', 'stub'),
                array('{"type": "nope"}', '?'),
                array('{}', '?'),
            );
        }
        if ($testName === 'testGetName') {
            return array(
                array('{"name": "polyfill"}', 'polyfill'),
                array('{"name": ""}', ''),
                array('{}', ''),
            );
        }
        if ($testName === 'testCanReplace') {
            return array(
                array('{"replace": {"ext-intl": "*"}}', 'ext-intl', true),
                array('{"replace": {"ext-intl": "*"}}', 'ext-zip', false),
                array('{}', 'ext-zip', false),
                array('{}', '', false),
            );
        }
        if ($testName === 'testGetFunctions') {
            return array(
                array('{"functions": []}', array()),
                array('{"function": ["a"]}', array()),
                array('{"functions": ["a"]}', array('a')),
                array('{"functions": ["a","b"]}', array('a', 'b')),
                array('{}', array()),
            );
        }
        if ($testName === 'testGetClasses') {
            return array(
                array('{"classes": []}', array()),
                array('{"classe": ["Hello\\\\World"]}', array()),
                array('{"classes": ["Hello\\\\World"]}', array('Hello\\World')),
                array('{"classes": ["Hello_World","Hello\\\\World"]}', array('Hello_World', 'Hello\\World')),
                array('{}', array()),
            );
        }
        if ($testName === 'testGetConstants') {
            return array(
                array('{"constants": []}', array()),
                array('{"constant": ["TYPE_BINARY"]}', array()),
                array('{"constants": ["TYPE_BINARY"]}', array('TYPE_BINARY')),
                array('{"constants": ["TYPE_BINARY","Hello\\\\World::TYPE_BINARY"]}', array('TYPE_BINARY', 'Hello\\World::TYPE_BINARY')),
                array('{}', array()),
            );
        }
        if ($testName === 'testGetReplacedExtensions') {
            return array(
                array('{"replace": []}', array()),
                array('{"replaces": {"ext-intl": "*"}}', array()),
                array('{"replace": {"ext-intl": "*"}}', array('ext-intl')),
                array('{"replace": {"ext-intl": "*", "php": "5.3"}}', array('ext-intl')),
                array('{"replace": {"ext-intl": "*", "curl": "*"}}', array('ext-intl')),
                array('{"replace": {"ext-intl": "*", "ext-curl": "*"}}', array('ext-intl', 'ext-curl')),
                array('{}', array()),
            );
        }

        return array();
    }
}

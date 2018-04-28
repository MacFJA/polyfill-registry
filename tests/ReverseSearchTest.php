<?php

namespace MacFJA\PolyFillRegistry\Tests;

use MacFJA\PolyFillRegistry\PolyfillRegistry;
use MacFJA\PolyFillRegistry\ReverseSearchInterface;
use PHPUnit\Framework\TestCase;

/**
 * Unit Test for ReverseSearchInterface
 *
 * @author  MacFJA
 * @license MIT
 */
class ReverseSearchTest extends TestCase
{
    /**
     * @param $registry
     * @return ReverseSearchInterface
     */
    private function getSearcher($registry)
    {
        $reader = new PolyfillRegistry();
        $reader->setRegistry($registry);

        return $reader;
    }

    /**
     * @param $registry
     * @param $name
     * @param $expected
     *
     * @dataProvider provider
     * @covers \MacFJA\PolyFillRegistry\ReverseSearchInterface::isPolyfill()
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::isPolyfill()
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::setRegistry()
     *
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::getPolyfillWithName()
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry::parseData()
     */
    public function testIsPolyfill($registry, $name, $expected)
    {
        static::assertEquals(
            $expected,
            $this
                ->getSearcher($registry)
                ->isPolyfill($name)
        );
    }

    /**
     * @param $registry
     * @param $name
     * @param $expected
     *
     * @dataProvider provider
     * @covers \MacFJA\PolyFillRegistry\ReverseSearchInterface::getPolyfillClasses()
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::getPolyfillClasses()
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::setRegistry()
     *
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::getPolyfillWithName()
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry
     */
    public function testGetPolyfillClasses($registry, $name, $expected)
    {
        static::assertEquals(
            $expected,
            $this
                ->getSearcher($registry)
                ->getPolyfillClasses($name)
        );
    }

    /**
     * @param $registry
     * @param $name
     * @param $expected
     *
     * @dataProvider provider
     * @covers \MacFJA\PolyFillRegistry\ReverseSearchInterface::getPolyfillFunctions()
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::getPolyfillFunctions()
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::setRegistry()
     *
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::getPolyfillWithName()
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry
     */
    public function testGetPolyfillFunctions($registry, $name, $expected)
    {
        static::assertEquals(
            $expected,
            $this
                ->getSearcher($registry)
                ->getPolyfillFunctions($name)
        );
    }

    /**
     * @param $registry
     * @param $name
     * @param $expected
     *
     * @dataProvider provider
     * @covers \MacFJA\PolyFillRegistry\ReverseSearchInterface::getPolyfillConstants()
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::getPolyfillConstants()
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::setRegistry()
     *
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::getPolyfillWithName()
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry
     */
    public function testGetPolyfillConstants($registry, $name, $expected)
    {
        static::assertEquals(
            $expected,
            $this
                ->getSearcher($registry)
                ->getPolyfillConstants($name)
        );
    }

    /**
     * @param $registry
     * @param $name
     * @param $expected
     *
     * @dataProvider provider
     * @covers \MacFJA\PolyFillRegistry\ReverseSearchInterface::getPolyfillExtensions()
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::getPolyfillExtensions()
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::setRegistry()
     *
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::getPolyfillWithName()
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry
     */
    public function testGetPolyfillExtensions($registry, $name, $expected)
    {
        static::assertEquals(
            $expected,
            $this
                ->getSearcher($registry)
                ->getPolyfillExtensions($name)
        );
    }

    public function provider($testName)
    {
        if ($testName === 'testIsPolyfill') {
            return array(
                array(__DIR__.'/fixtures/registry/empty.json', 'test', false),
                array(__DIR__.'/fixtures/registry/ext-intl-one.json', 'test', true),
                array(__DIR__.'/fixtures/registry/function-apc_add-one.json', 'test', false),
                array(__DIR__.'/fixtures/registry/function-apc_add-one.json', 'test2', true),
            );
        }
        if ($testName === 'testGetPolyfillClasses') {
            return array(
                array(__DIR__.'/fixtures/registry/empty.json', 'test', array()),
                array(__DIR__.'/fixtures/registry/ext-intl-one.json', 'test', array()),
                array(__DIR__.'/fixtures/registry/function-apc_add-one.json', 'test2', array()),
                array(__DIR__.'/fixtures/registry/class-HelloWorld-one.json', 'test3', array('Hello\\World')),
            );
        }
        if ($testName === 'testGetPolyfillFunctions') {
            return array(
                array(__DIR__.'/fixtures/registry/empty.json', 'test', array()),
                array(__DIR__.'/fixtures/registry/ext-intl-one.json', 'test', array()),
                array(__DIR__.'/fixtures/registry/function-apc_add-one.json', 'test2', array('apc_add')),
            );
        }
        if ($testName === 'testGetPolyfillConstants') {
            return array(
                array(__DIR__.'/fixtures/registry/empty.json', 'test', array()),
                array(__DIR__.'/fixtures/registry/ext-intl-one.json', 'test', array()),
                array(__DIR__.'/fixtures/registry/constant-A_CONST-one.json', 'test4', array('A_CONST')),
            );
        }
        if ($testName === 'testGetPolyfillExtensions') {
            return array(
                array(__DIR__.'/fixtures/registry/empty.json', 'test', array()),
                array(__DIR__.'/fixtures/registry/ext-intl-one.json', 'test', array('ext-intl')),
                array(__DIR__.'/fixtures/registry/constant-A_CONST-one.json', 'test4', array()),
            );
        }
        return array();
    }
}

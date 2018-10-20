<?php

namespace MacFJA\PolyFillRegistry\Tests;

use MacFJA\PolyFillRegistry\PolyfillRegistry;
use MacFJA\PolyFillRegistry\ReaderInterface;
use PHPUnit\Framework\TestCase;

/**
 * Unit Test for ReaderInterface
 *
 * @author  MacFJA
 * @license MIT
 */
class ReaderTest extends TestCase
{
    /**
     * @param $registry
     * @param $name
     * @param $expected
     *
     * @dataProvider provider
     * @covers \MacFJA\PolyFillRegistry\ReaderInterface::getPolyfillForExtension()
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::getPolyfillForExtension()
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::setRegistry()
     *
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry::getName
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry::parseData
     */
    public function testGetPolyfillForExtension($registry, $name, $expected)
    {
        /** @var ReaderInterface $reader */
        $reader = new PolyfillRegistry();
        $reader->setRegistry($registry);

        $entries = $reader->getPolyfillForExtension($name);
        $entries = array_map(function ($item) {
            return $item->getName();
        }, $entries);

        static::assertEquals($expected, $entries);
    }

    /**
     * @param $registry
     * @param $name
     * @param $expected
     *
     * @dataProvider provider
     * @covers \MacFJA\PolyFillRegistry\ReaderInterface::getPolyfillForFunction()
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::getPolyfillForFunction()
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::setRegistry()
     *
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry::getName
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry::parseData
     */
    public function testGetPolyfillForFunction($registry, $name, $expected)
    {
        /** @var ReaderInterface $reader */
        $reader = new PolyfillRegistry();
        $reader->setRegistry($registry);

        $entries = $reader->getPolyfillForFunction($name);
        $entries = array_map(function ($item) {
            return $item->getName();
        }, $entries);

        static::assertEquals($expected, $entries);
    }

    /**
     * @param $registry
     * @param $name
     * @param $expected
     *
     * @dataProvider provider
     * @covers \MacFJA\PolyFillRegistry\ReaderInterface::getPolyfillForClass()
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::getPolyfillForClass()
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::setRegistry()
     *
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry::getName
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry::parseData
     */
    public function testGetPolyfillForClass($registry, $name, $expected)
    {
        /** @var ReaderInterface $reader */
        $reader = new PolyfillRegistry();
        $reader->setRegistry($registry);

        $entries = $reader->getPolyfillForClass($name);
        $entries = array_map(function ($item) {
            return $item->getName();
        }, $entries);

        static::assertEquals($expected, $entries);
    }

    /**
     * @param $registry
     * @param $name
     * @param $expected
     *
     * @dataProvider provider
     * @covers \MacFJA\PolyFillRegistry\ReaderInterface::getPolyfillForConstant()
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::getPolyfillForConstant()
     * @covers \MacFJA\PolyFillRegistry\PolyfillRegistry::setRegistry()
     *
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry::getName
     * @covers \MacFJA\PolyFillRegistry\PolyfillEntry::parseData
     */
    public function testGetPolyfillForConstant($registry, $name, $expected)
    {
        /** @var ReaderInterface $reader */
        $reader = new PolyfillRegistry();
        $reader->setRegistry($registry);

        $entries = $reader->getPolyfillForConstant($name);
        $entries = array_map(function ($item) {
            return $item->getName();
        }, $entries);

        static::assertEquals($expected, $entries);
    }

    public function provider($testName)
    {
        if ($testName === 'testGetPolyfillForExtension') {
            return array(
                array(__DIR__.'/fixtures/registry/empty.json', 'ext-intl', array()),
                array(__DIR__.'/fixtures/registry/empty.json', 'pecl-intl', array()),
                array(__DIR__.'/fixtures/registry/ext-intl-one.json', 'ext-intl', array('test')),
                array(__DIR__.'/fixtures/registry/pecl-http-one.json', 'pecl-http', array('test')),
                array(__DIR__.'/fixtures/registry/function-apc_add-one.json', 'ext-intl', array()),
            );
        }
        if ($testName === 'testGetPolyfillForFunction') {
            return array(
                array(__DIR__.'/fixtures/registry/empty.json', 'ext-intl', array()),
                array(__DIR__.'/fixtures/registry/ext-intl-one.json', 'apc_add', array()),
                array(__DIR__.'/fixtures/registry/function-apc_add-one.json', 'apc_add', array('test2')),
            );
        }
        if ($testName === 'testGetPolyfillForClass') {
            return array(
                array(__DIR__.'/fixtures/registry/empty.json', 'Hello\\World', array()),
                array(__DIR__.'/fixtures/registry/ext-intl-one.json', 'Hello\\World', array()),
                array(__DIR__.'/fixtures/registry/function-apc_add-one.json', 'Hello\\World', array()),
                array(__DIR__.'/fixtures/registry/class-HelloWorld-one.json', 'Hello\\World', array('test3')),
            );
        }
        if ($testName === 'testGetPolyfillForConstant') {
            return array(
                array(__DIR__.'/fixtures/registry/empty.json', 'A_CONST', array()),
                array(__DIR__.'/fixtures/registry/ext-intl-one.json', 'A_CONST', array()),
                array(__DIR__.'/fixtures/registry/function-apc_add-one.json', 'A_CONST', array()),
                array(__DIR__.'/fixtures/registry/class-HelloWorld-one.json', 'A_CONST', array()),
                array(__DIR__.'/fixtures/registry/constant-A_CONST-one.json', 'A_CONST', array('test4')),
            );
        }
        return array();
    }
}

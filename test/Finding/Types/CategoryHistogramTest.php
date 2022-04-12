<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Finding\Types;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Finding\Types\CategoryHistogram;

class CategoryHistogramTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new CategoryHistogram();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\CategoryHistogram', $this->obj);
    }

    public function testExtendsCategory()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\Category', $this->obj);
    }
}

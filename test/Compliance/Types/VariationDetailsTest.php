<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Compliance\Types;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Compliance\Types\VariationDetails;

class VariationDetailsTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new VariationDetails();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Compliance\Types\VariationDetails', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}

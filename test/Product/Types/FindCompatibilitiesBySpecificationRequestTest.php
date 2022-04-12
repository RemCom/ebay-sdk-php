<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Product\Types;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Product\Types\FindCompatibilitiesBySpecificationRequest;

class FindCompatibilitiesBySpecificationRequestTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new FindCompatibilitiesBySpecificationRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Product\Types\FindCompatibilitiesBySpecificationRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Product\Types\BaseServiceRequest', $this->obj);
    }
}

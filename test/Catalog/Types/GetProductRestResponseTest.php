<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Catalog\Types;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Catalog\Types\GetProductRestResponse;

class GetProductRestResponseTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new GetProductRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Catalog\Types\GetProductRestResponse', $this->obj);
    }

    public function testExtendsProduct()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Catalog\Types\Product', $this->obj);
    }
}

<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Shopping\Types;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Shopping\Types\GetCategoryInfoRequestType;

class GetCategoryInfoRequestTypeTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new GetCategoryInfoRequestType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Types\GetCategoryInfoRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Types\AbstractRequestType', $this->obj);
    }
}

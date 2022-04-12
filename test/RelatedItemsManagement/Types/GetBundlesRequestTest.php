<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\RelatedItemsManagement\Types;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\RelatedItemsManagement\Types\GetBundlesRequest;

class GetBundlesRequestTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new GetBundlesRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\RelatedItemsManagement\Types\GetBundlesRequest', $this->obj);
    }

    public function testExtendsBaseRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\RelatedItemsManagement\Types\BaseRequest', $this->obj);
    }
}

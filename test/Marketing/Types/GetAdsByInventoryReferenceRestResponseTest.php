<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Marketing\Types;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Marketing\Types\GetAdsByInventoryReferenceRestResponse;

class GetAdsByInventoryReferenceRestResponseTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new GetAdsByInventoryReferenceRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\GetAdsByInventoryReferenceRestResponse', $this->obj);
    }

    public function testExtendsAds()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\Ads', $this->obj);
    }
}

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
use DTS\eBaySDK\Finding\Types\FindItemsByKeywordsResponse;

class FindItemsByKeywordsResponseTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new FindItemsByKeywordsResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\FindItemsByKeywordsResponse', $this->obj);
    }

    public function testExtendsBaseFindingServiceResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\BaseFindingServiceResponse', $this->obj);
    }
}

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
use DTS\eBaySDK\Finding\Types\FindItemsForFavoriteSearchRequest;

class FindItemsForFavoriteSearchRequestTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new FindItemsForFavoriteSearchRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\FindItemsForFavoriteSearchRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\BaseServiceRequest', $this->obj);
    }
}

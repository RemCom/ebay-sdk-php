<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Browse\Types;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Browse\Types\SearchForItemsRestResponse;

class SearchForItemsRestResponseTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new SearchForItemsRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Browse\Types\SearchForItemsRestResponse', $this->obj);
    }

    public function testExtendsSearchPagedCollection()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Browse\Types\SearchPagedCollection', $this->obj);
    }
}

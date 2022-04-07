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
use DTS\eBaySDK\Catalog\Types\CreateChangeRequestRestRequest;

class CreateChangeRequestRestRequestTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new CreateChangeRequestRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Catalog\Types\CreateChangeRequestRestRequest', $this->obj);
    }

    public function testExtendsCreateChangeRequestPayload()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Catalog\Types\CreateChangeRequestPayload', $this->obj);
    }
}

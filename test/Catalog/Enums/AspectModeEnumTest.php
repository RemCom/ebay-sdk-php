<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Catalog\Enums;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Catalog\Enums\AspectModeEnum;

class AspectModeEnumTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new AspectModeEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Catalog\Enums\AspectModeEnum', $this->obj);
    }
}

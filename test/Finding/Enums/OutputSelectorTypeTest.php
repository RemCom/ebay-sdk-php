<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Finding\Enums;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Finding\Enums\OutputSelectorType;

class OutputSelectorTypeTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new OutputSelectorType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Enums\OutputSelectorType', $this->obj);
    }
}

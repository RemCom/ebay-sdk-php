<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\FileTransfer\Enums;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\FileTransfer\Enums\AckValue;

class AckValueTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new AckValue();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Enums\AckValue', $this->obj);
    }
}

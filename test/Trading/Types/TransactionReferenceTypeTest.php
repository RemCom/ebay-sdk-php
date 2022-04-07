<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Trading\Types;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Trading\Types\TransactionReferenceType;

class TransactionReferenceTypeTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new TransactionReferenceType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\TransactionReferenceType', $this->obj);
    }

    public function testExtendsStringType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\StringType', $this->obj);
    }
}

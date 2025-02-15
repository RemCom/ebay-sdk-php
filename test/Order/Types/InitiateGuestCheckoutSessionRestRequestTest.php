<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Order\Types;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Order\Types\InitiateGuestCheckoutSessionRestRequest;

class InitiateGuestCheckoutSessionRestRequestTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new InitiateGuestCheckoutSessionRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Order\Types\InitiateGuestCheckoutSessionRestRequest', $this->obj);
    }

    public function testExtendsCreateGuestCheckoutSessionRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Order\Types\CreateGuestCheckoutSessionRequest', $this->obj);
    }
}

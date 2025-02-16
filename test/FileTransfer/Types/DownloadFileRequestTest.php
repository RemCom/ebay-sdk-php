<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\FileTransfer\Types;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\FileTransfer\Types\DownloadFileRequest;

class DownloadFileRequestTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new DownloadFileRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\DownloadFileRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\BaseServiceRequest', $this->obj);
    }
}

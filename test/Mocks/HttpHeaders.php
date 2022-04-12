<?php
namespace DTS\eBaySDK\Test\Mocks;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\HttpHeadersTrait;

class HttpHeaders
{
    use HttpHeadersTrait;

    public function __construct(array $headers)
    {
        $this->setHeaders($headers);
    }
}

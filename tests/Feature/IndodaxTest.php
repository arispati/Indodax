<?php

namespace Arispati\Indodax\Tests\Feature;

use Arispati\Indodax\Indodax;
use Arispati\Indodax\Tests\TestCase;

class IndodaxTest extends TestCase
{
    public function testGetServerTime()
    {
        $this->assertIsObject(Indodax::getServerTime());
    }

    public function testGetPairs()
    {
        $this->assertIsArray(Indodax::getPairs());
    }

    public function testGetPriceIncrements()
    {
        $this->assertIsObject(Indodax::getPriceIncrements());
    }

    public function testGetSummaries()
    {
        $this->assertIsObject(Indodax::getSummaries());
    }

    public function testGetTicker()
    {
        $this->assertIsObject(Indodax::getTicker('btcidr'));
    }

    public function testGetAllTickers()
    {
        $this->assertIsObject(Indodax::getAllTickers());
    }

    public function testGetTrades()
    {
        $this->assertIsArray(Indodax::getTrades('btcidr'));
    }

    public function testGetDepth()
    {
        $this->assertIsObject(Indodax::getDepth('btcidr'));
    }
}

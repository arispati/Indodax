<?php

namespace Arispati\Indodax;

use Arispati\Indodax\Libraries\Client;
use Arispati\Indodax\Libraries\Url;

class Indodax
{
    /**
     * Get server time
     *
     * @param string $pairID
     * @return \stdClass|\Exception
     */
    public static function getServerTime()
    {
        return Client::request(Url::getServerTime());
    }

    /**
     * Get pairs
     *
     * @return array|\Exception
     */
    public static function getPairs()
    {
        return Client::request(Url::getPairs());
    }

    /**
     * Get price increments
     *
     * @return \stdClass|\Exception
     */
    public static function getPriceIncrements()
    {
        return Client::request(Url::getPriceIncrements());
    }

    /**
     * Get summaries
     *
     * @return \stdClass|\Exception
     */
    public static function getSummaries()
    {
        return Client::request(Url::getSummaries());
    }

    /**
     * Get ticker
     *
     * @param string $pairID
     * @return \stdClass|\Exception
     */
    public static function getTicker(string $pairID)
    {
        return Client::request(Url::getTicker($pairID));
    }

    /**
     * Get all tickers
     *
     * @return \stdClass|\Exception
     */
    public static function getAllTickers()
    {
        return Client::request(Url::getAllTickers());
    }

    /**
     * Get trades
     *
     * @param string $pairID
     * @return \stdClass|\Exception
     */
    public static function getTrades(string $pairID)
    {
        return Client::request(Url::getTrades($pairID));
    }

    /**
     * Get depth
     *
     * @param string $pairID
     * @return \stdClass|\Exception
     */
    public static function getDepth(string $pairID)
    {
        return Client::request(Url::getDepth($pairID));
    }
}

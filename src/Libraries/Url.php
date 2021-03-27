<?php

namespace Arispati\Indodax\Libraries;

class Url
{
    /**
     * Get server time url
     *
     * @return string
     */
    public static function getServerTime(): string
    {
        return 'api/server_time';
    }

    /**
     * Get pairs url
     *
     * @return string
     */
    public static function getPairs(): string
    {
        return 'api/pairs';
    }

    /**
     * Get price increment url
     *
     * @return string
     */
    public static function getPriceIncrements(): string
    {
        return 'api/price_increments';
    }

    /**
     * Get summaries
     *
     * @return string
     */
    public static function getSummaries(): string
    {
        return 'api/summaries';
    }

    /**
     * Get ticker url
     *
     * @param string $pairID
     * @return string
     */
    public static function getTicker(string $pairID): string
    {
        return implode('/', [
            'api/ticker',
            $pairID
        ]);
    }

    /**
     * Get all tickers
     *
     * @return string
     */
    public static function getAllTickers(): string
    {
        return 'api/ticker_all';
    }

    /**
     * Get trades
     *
     * @param string $pairID
     * @return string
     */
    public static function getTrades(string $pairID): string
    {
        return implode('/', [
            'api/trades',
            $pairID
        ]);
    }

    /**
     * Get depth
     *
     * @param string $pairID
     * @return string
     */
    public static function getDepth(string $pairID): string
    {
        return implode('/', [
            'api/depth',
            $pairID
        ]);
    }
}

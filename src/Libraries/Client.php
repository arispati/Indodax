<?php

namespace Arispati\Indodax\Libraries;

use Exception;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Psr7\Response;

class Client
{
    /**
     * Setup request
     *
     * @param string $url
     * @return Response
     */
    public static function request($url)
    {
        return static::response(static::guzzle()->get($url));
    }
    
    /**
     * Setup guzzle client
     *
     * @return Client
     */
    private static function guzzle()
    {
        return new GuzzleClient([
            'base_uri' => config('indodax.uri')
        ]);
    }

    /**
     * Response handler
     *
     * @param Response $response
     * @return \stdClass|Exception
     */
    private static function response(Response $response)
    {
        if ($response->getStatusCode() == 200) {
            return json_decode((string) $response->getBody());
        } else {
            $exception = new Exception($response->getReasonPhrase());
            
            throw $exception;
        }
    }
}

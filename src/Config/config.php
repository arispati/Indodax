<?php

return [
    'uri' => env('INDODAX_API_URI', 'https://indodax.com'),
    'connect_timeout' => env('INDODAX_API_CONNECT_TIMEOUT', 1),
    'timeout' => env('INDODAX_API_TIMEOUT', 5)
];

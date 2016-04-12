<?php

return [
    'oracle' => [
        'driver'        => 'oracle',
        'tns'           => env('DB_TNS', ''),
        'host'          => env('DB_HOST', 'zg-officetest.in2.hr'),
        'port'          => env('DB_PORT', '1521'),
        'database'      => env('DB_DATABASE', 'app_core_notify'),
        'username'      => env('DB_USERNAME', 'app_core_notify'),
        'password'      => env('DB_PASSWORD', 'yepmgr1'),
        'charset'       => env('DB_CHARSET', 'AL32UTF8'),
        'prefix'        => env('DB_PREFIX', ''),
        'prefix_schema' => env('DB_SCHEMA_PREFIX', ''),
    ],
];

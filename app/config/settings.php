<?php

use Lib\EnvReader;
EnvReader::load(__DIR__ . '/../../.env');

return [
    'app' => [
        'name' => 'Frank/Tickster',
        'debug' => true,
    ],
    'paths' => [
        'root' => __DIR__ . '/../..',                       // Root directory (2 levels up)
        'app' => __DIR__ . '/..',                           // App folder
        'public' => __DIR__ . '/../../public',              // Public folder
        'views' => __DIR__ . '/../views',                   // Views directory
        'cache' => __DIR__ . '/../../cache',                // Cache directory
        'routes' => __DIR__ . '/../routes.php',             // Routes file
        'dependencies' => __DIR__ . '/dependencies.php',    // Dependencies file
        'logs' => __DIR__ . '/../../logs'                   // Logs directory
    ],
    'database' => [
        'host' => EnvReader::get('DB_HOST'),
        'name' => EnvReader::get('DB_NAME'),
        'user' => EnvReader::get('DB_USER'),
        'pass' => EnvReader::get('DB_PASS'),
    ],
    'jwt' => [
        'secret' => 'my-secret-key',  // Change this to a secure key
        'exp' => 60 * 60 * 24, // 1 day expiration
        'issuer' => 'some-domain.com'
    ]
];

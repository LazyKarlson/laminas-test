<?php

/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return [
    'db' => [
        'driver' => getenv('DB_DRIVER'),
        'hostname' => getenv('DB_HOSTNAME'),
        'port' => getenv('DB_PORT'),
        'database' => getenv('DB_DATABASE'),
        'user' => getenv('DB_USER'),
        'password' => getenv('DB_PASSWORD'),
        'charset' => getenv('DB_CHARSET'),
        'options' => [
            'buffer_results' => true,
        ],
    ]
];
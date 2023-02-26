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
        'driver' => 'Pdo',
        'dsn'    => 'pgsql:host=getenv('DB_HOST');port=getenv('DB_PORT');dbname=getenv('DB_DATABASE');',
        'user' => getenv('DB_USER'),
        'password' => getenv('DB_PASS'),
    ]
];
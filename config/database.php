<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for database operations. This is
    | the connection which will be utilized unless another connection
    | is explicitly specified when you execute a query / statement.
    |
    */

    'default' => env('DB_CONNECTION', 'sqlite'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Below are all of the database connections defined for your application.
    | An example configuration is provided for each database system which
    | is supported by Laravel. You're free to add / remove connections.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DB_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
            'busy_timeout' => null,
            'journal_mode' => null,
            'synchronous' => null,
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mariadb' => [
            'driver' => 'mariadb',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            // 'encrypt' => env('DB_ENCRYPT', 'yes'),
            // 'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

        'db_auth' => [
            'driver'   => env('DB_AUTH_CONNECTION', 'mysql'),
            'host'     => env('DB_AUTH_HOST', '127.0.0.1'),
            'port'     => env('DB_AUTH_PORT', '3306'),
            'database' => env('DB_AUTH_DATABASE', 'phober_auth'),
            'username' => env('DB_AUTH_USERNAME', 'forge'),
            'password' => env('DB_AUTH_PASSWORD', ''),
        ],

        'db_device' => [
            'driver'   => env('DB_DEVICE_CONNECTION', 'mysql'),
            'host'     => env('DB_DEVICE_HOST', '127.0.0.1'),
            'port'     => env('DB_DEVICE_PORT', '3306'),
            'database' => env('DB_DEVICE_DATABASE', 'phober_device'),
            'username' => env('DB_DEVICE_USERNAME', 'forge'),
            'password' => env('DB_DEVICE_PASSWORD', ''),
        ],

        'db_crm' => [
            'driver'   => env('DB_CRM_CONNECTION', 'mysql'),
            'host'     => env('DB_CRM_HOST', '127.0.0.1'),
            'port'     => env('DB_CRM_PORT', '3306'),
            'database' => env('DB_CRM_DATABASE', 'phober_crm'),
            'username' => env('DB_CRM_USERNAME', 'forge'),
            'password' => env('DB_CRM_PASSWORD', ''),
        ],

        'db_staff' => [
            'driver'   => env('DB_STAFF_CONNECTION', 'mysql'),
            'host'     => env('DB_STAFF_HOST', '127.0.0.1'),
            'port'     => env('DB_STAFF_PORT', '3306'),
            'database' => env('DB_STAFF_DATABASE', 'phober_staff'),
            'username' => env('DB_STAFF_USERNAME', 'forge'),
            'password' => env('DB_STAFF_PASSWORD', ''),
        ],

        'db_shared' => [
            'driver'   => env('DB_SHARED_CONNECTION', 'mysql'),
            'host'     => env('DB_SHARED_HOST', '127.0.0.1'),
            'port'     => env('DB_SHARED_PORT', '3306'),
            'database' => env('DB_SHARED_DATABASE', 'phober_shared'),
            'username' => env('DB_SHARED_USERNAME', 'forge'),
            'password' => env('DB_SHARED_PASSWORD', ''),
        ],

        'db_configs' => [
            'driver'   => env('DB_CONFIGS_CONNECTION', 'mysql'),
            'host'     => env('DB_CONFIGS_HOST', '127.0.0.1'),
            'port'     => env('DB_CONFIGS_PORT', '3306'),
            'database' => env('DB_CONFIGS_DATABASE', 'phober_configs'),
            'username' => env('DB_CONFIGS_USERNAME', 'forge'),
            'password' => env('DB_CONFIGS_PASSWORD', ''),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run on the database.
    |
    */

    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as Memcached. You may define your connection settings here.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug((string) env('APP_NAME', 'laravel')).'-database-'),
            'persistent' => env('REDIS_PERSISTENT', false),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];

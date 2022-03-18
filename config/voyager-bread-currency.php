<?php

return [

    /*
     * If enabled for voyager-bread-currency package.
     */
    'enabled' => env('VOYAGER_BREAD_CURRENCY_ENABLED', true),

    /*
     * The config_key for voyager-bread-currency package.
     */
    'config_key' => env('VOYAGER_BREAD_CURRENCY_CONFIG_KEY', 'joy-voyager-bread-currency'),

    /*
     * The route_prefix for voyager-bread-currency package.
     */
    'route_prefix' => env('VOYAGER_BREAD_CURRENCY_ROUTE_PREFIX', 'joy-voyager-bread-currency'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadCurrency\\Http\\Controllers',
    ],
];

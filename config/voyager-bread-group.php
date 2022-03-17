<?php

return [

    /*
     * If enabled for voyager-bread-group package.
     */
    'enabled' => env('VOYAGER_BREAD_GROUP_ENABLED', true),

    /*
     * The config_key for voyager-bread-group package.
     */
    'config_key' => env('VOYAGER_BREAD_GROUP_CONFIG_KEY', 'joy-voyager-bread-group'),

    /*
     * The route_prefix for voyager-bread-group package.
     */
    'route_prefix' => env('VOYAGER_BREAD_GROUP_ROUTE_PREFIX', 'joy-voyager-bread-group'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadGroup\\Http\\Controllers',
    ],
];

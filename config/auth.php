<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'mahasiswa',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    */
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'mahasiswa',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | Kita ganti model-nya ke App\Models\Mahasiswa
    */
    'providers' => [
        'mahasiswa' => [
            'driver' => 'eloquent',
            'model' => App\Models\Mahasiswa::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    */
    'passwords' => [
        'mahasiswa' => [
            'provider' => 'mahasiswa',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,
];

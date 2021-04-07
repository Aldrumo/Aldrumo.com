<?php

return [

    /**
     * Analytics Dashboard
     *
     * The prefix and middleware for the analytics dashboard.
     */

    'prefix' => 'analytics',

    'middleware' => [
        'web',
        'auth:sanctum',
        'verified',
        'adminCheck',
    ],

    /**
     * Exclude
     *
     * The routes excluded from page view tracking.
     */

    'exclude' => [
        '/analytics',
        '/admin',
        '/admin/pages',
    ],

];

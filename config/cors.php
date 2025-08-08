<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['*'],
    'allowed_origins' => [
        'https://crmappfront-production.up.railway.app',
        'https://crmappback-production-9545.up.railway.app', // Your backend URL
        'http://localhost:3000', // for development
        'http://localhost:5173', // For Vite dev server
        '*' // Remove this in production for security
    ],
    'allowed_origins_patterns' => [
        'https://*.railway.app',
        'https://*.up.railway.app'
    ],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true, // Changed to true for authentication
];
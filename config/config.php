<?php

return [
    'router' => [
        'defaults' => [
            'module'     => 'auth',
            'controller' => 'test',
            'action'     => 'index'
        ]
    ],
    'events' => [
        'route' => 'events\RouteEvent'
    ],
    'site_preferences' => [
        'mode' => 'developer',
        'display_errors' => false
    ]
];

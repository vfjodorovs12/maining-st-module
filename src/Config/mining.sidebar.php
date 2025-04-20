<?php

return [
    'mining' => [
        'title' => 'Mining',
        'icon' => 'fa fa-industry',
        'children' => [
            'statistics' => [
                'title' => 'Statistics',
                'permission' => 'view mining statistics',
                'route' => 'mining.statistics',
            ],
            'moons' => [
                'title' => 'Moons',
                'permission' => 'manage moons',
                'route' => 'mining.moons',
            ],
            'invoices' => [
                'title' => 'Invoices',
                'permission' => 'view invoices',
                'route' => 'mining.invoices',
            ],
            'calendar' => [
                'title' => 'Calendar',
                'permission' => 'view calendar',
                'route' => 'mining.calendar',
            ],
            'settings' => [
                'title' => 'Settings',
                'permission' => 'configure mining module',
                'route' => 'mining.settings',
            ],
        ],
    ],
];

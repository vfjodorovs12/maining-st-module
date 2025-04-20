<?php

return [
    'mining' => [
        'name' => 'mining::sidebar.mining',
        'icon' => 'fas fa-chart-bar',
        'route_segment' => 'mining',
        'permission' => 'mining.view',
        'entries' => [
            // Страница статистики добычи
            [
                'name' => 'mining::sidebar.statistics',
                'icon' => 'fas fa-chart-line',
                'route' => 'mining.statistics',
                'permission' => 'mining.view'
            ],
            // Страница управления лунами
            [
                'name' => 'mining::sidebar.moons',
                'icon' => 'fas fa-moon',
                'route' => 'mining.moons',
                'permission' => 'mining.manage_moons'
            ],
            // Календарь лун
            [
                'name' => 'mining::sidebar.calendar',
                'icon' => 'fas fa-calendar-alt',
                'route' => 'mining.calendar',
                'permission' => 'mining.calendar'
            ],
            // Страница счетов
            [
                'name' => 'mining::sidebar.invoices',
                'icon' => 'fas fa-file-invoice-dollar',
                'route' => 'mining.invoices',
                'permission' => 'mining.view_invoices'
            ],
            // Страница настроек
            [
                'name' => 'mining::sidebar.settings',
                'icon' => 'fas fa-cogs',
                'route' => 'mining.settings',
                'permission' => 'mining.settings'
            ]
        ]
    ]
];

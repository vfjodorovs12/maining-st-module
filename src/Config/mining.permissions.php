<?php

return [
    'mining' => [
        'label' => 'mining::permissions.mining_label',
        'description' => 'mining::permissions.mining_description',
        'division' => 'industrial',
        'permissions' => [
            // Просмотр данных о добыче
            'view' => [
                'label' => 'mining::permissions.view_label',
                'description' => 'mining::permissions.view_description',
            ],
            // Просмотр календаря лун
            'calendar' => [
                'label' => 'mining::permissions.calendar_label',
                'description' => 'mining::permissions.calendar_description',
            ],
            // Управление лунами
            'manage_moons' => [
                'label' => 'mining::permissions.manage_moons_label',
                'description' => 'mining::permissions.manage_moons_description',
            ],
            // Управление счетами
            'manage_invoices' => [
                'label' => 'mining::permissions.manage_invoices_label',
                'description' => 'mining::permissions.manage_invoices_description',
            ],
            // Просмотр счетов
            'view_invoices' => [
                'label' => 'mining::permissions.view_invoices_label',
                'description' => 'mining::permissions.view_invoices_description',
            ],
            // Управление настройками модуля
            'settings' => [
                'label' => 'mining::permissions.settings_label',
                'description' => 'mining::permissions.settings_description',
            ]
        ]
    ]
];

<?php

return [
    // Основные настройки модуля
    'name' => 'Mining Module',
    'version' => '1.0.0',
    
    // ID корпорации по умолчанию
    'default_corporation_id' => env('MINING_CORP_ID', null),
    
    // Настройки налогов и переработки по умолчанию
    'refining_rate' => 85.0, // Процент эффективности переработки по умолчанию
    'tax_rate' => 10.0, // Налоговая ставка по умолчанию
    
    // Коэффициенты для различных типов руды
    'r64_coefficient' => 1.0, // Коэффициент для R64
    'r32_coefficient' => 1.0, // Коэффициент для R32
    'r16_coefficient' => 1.0, // Коэффициент для R16
    
    // Регион для получения рыночных цен
    'price_region_id' => 10000002, // The Forge (Jita)
    
    // Режим отладки
    'debug_mode' => env('MINING_DEBUG_MODE', false),
    
    // Кэширование данных API (в минутах)
    'cache_time' => 60,
    
    // Интеграция с ESI API
    'esi' => [
        'mining_endpoint' => '/characters/{character_id}/mining/',
        'observers_endpoint' => '/corporation/{corporation_id}/mining/observers/',
        'extractions_endpoint' => '/corporation/{corporation_id}/mining/extractions/',
        'moons_endpoint' => '/universe/moons/{moon_id}/',
        'market_orders_endpoint' => '/markets/{region_id}/orders/'
    ]
];

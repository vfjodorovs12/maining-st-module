<?php

return [
    'corporation_id' => env('MINING_CORPORATION_ID', null),
    'refining_efficiency' => env('MINING_REFINING_EFFICIENCY', 0.75),
    'tax_rates' => [
        'R64' => env('MINING_TAX_R64', 15),
        'R32' => env('MINING_TAX_R32', 10),
        'R16' => env('MINING_TAX_R16', 8),
    ],
    'debug_mode' => env('MINING_DEBUG_MODE', false),
];

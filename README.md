mining-module/
├── composer.json
├── src/
│   ├── Config/
│   │   ├── mining.sidebar.php
│   │   ├── mining.permissions.php
│   │   └── mining.config.php
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Api/
│   │   │   │   ├── CalendarController.php
│   │   │   │   ├── InvoiceController.php
│   │   │   │   ├── MoonController.php
│   │   │   │   └── StatisticsController.php
│   │   │   ├── CalendarController.php
│   │   │   ├── InvoiceController.php
│   │   │   ├── MoonController.php
│   │   │   ├── SettingsController.php
│   │   │   └── StatisticsController.php
│   │   ├── Middleware/
│   │   │   └── CheckDebugMode.php
│   │   └── routes.php
│   ├── Models/
│   │   ├── MiningCalendarEvent.php
│   │   ├── MiningDebugLog.php
│   │   ├── MiningInvoice.php
│   │   ├── MiningMoon.php
│   │   ├── MiningRecord.php
│   │   └── MiningSettings.php
│   ├── database/
│   │   └── migrations/
│   │       ├── 2023_01_01_000001_create_mining_records_table.php
│   │       ├── 2023_01_01_000002_create_mining_moons_table.php
│   │       ├── 2023_01_01_000003_create_mining_invoices_table.php
│   │       ├── 2023_01_01_000004_create_mining_calendar_events_table.php
│   │       ├── 2023_01_01_000005_create_mining_settings_table.php
│   │       └── 2023_01_01_000006_create_mining_debug_logs_table.php
│   ├── resources/
│   │   ├── views/
│   │   │   ├── calendar.blade.php
│   │   │   ├── invoices.blade.php
│   │   │   ├── moons.blade.php
│   │   │   ├── settings.blade.php
│   │   │   └── statistics.blade.php
│   │   ├── lang/
│   │   │   ├── en/
│   │   │   │   └── mining.php
│   │   │   └── ru/
│   │   │       └── mining.php
│   │   ├── js/
│   │   │   ├── calendar.js
│   │   │   ├── invoices.js
│   │   │   ├── moons.js
│   │   │   └── statistics.js
│   │   └── css/
│   │       └── mining.css
│   ├── Services/
│   │   ├── DebugService.php
│   │   ├── MiningInvoiceService.php
│   │   ├── MiningMoonService.php
│   │   ├── MiningStatisticsService.php
│   │   └── PricingService.php
│   └── MiningServiceProvider.php
└── README.md

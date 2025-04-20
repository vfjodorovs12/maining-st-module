# Mining Module for EVE SeAT

This module provides mining tracking functionality for EVE SeAT.

## Features

- Track mining operations by character and their alts
- Mining statistics with filtering options
- Moon management
- Invoice generation
- Moon extraction calendar
- Customizable pricing and tax rates

## Installation

1. Require the package in your SeAT installation:
```bash
composer require yourusername/seat-mining
```

2. Run migrations:
```bash
php artisan migrate
```

3. Publish assets:
```bash
php artisan vendor:publish --tag=mining --force
```

## Configuration

After installation, navigate to the Settings page in the Mining module to configure:

- Corporation ID for mining operations
- Refining efficiency rate
- Tax rates for different moon ore types (R64, R32, R16)
- Debug mode

## Permissions

The module adds several permissions that can be assigned to roles:

- View mining statistics
- Manage moons
- View and create invoices
- Manage calendar events
- Configure module settings

## Support

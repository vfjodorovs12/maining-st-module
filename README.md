# Mining Module for EVE SeAT

The **Mining Module** is an extension for [EVE SeAT 5](https://github.com/eveseat/seat) that provides advanced functionality to track mining operations, manage mining moons, create invoices, and display mining statistics. This module is designed to support EVE Online corporations in managing and optimizing their mining activities.

---

## Features

- **Mining Statistics**: View detailed statistics for mining operations, including ore type, quantity, and refined output.
- **Moon Management**: Manage mining moons, ore compositions, and associated corporations.
- **Invoice System**: Generate invoices for mining taxes and manage payment statuses.
- **Mining Calendar**: Display upcoming moon extractions in a calendar format.
- **Module Settings**: Configure tax rates, refining efficiency, and debug mode for your corporation.

---

## Installation

### Requirements

- **EVE SeAT Version**: 5.x
- **PHP**: 8.0 or later
- **Composer**: Installed on the server

### Installation Steps

1. **Navigate to the SeAT Installation Directory**:
   ```bash
   cd /var/www/seat
   ```

2. **Install via Composer**:
   ```bash
   composer require yourusername/seat-mining
   ```

3. **Run Migrations**:
   ```bash
   php artisan migrate
   ```

4. **Publish Configuration and Resources**:
   ```bash
   php artisan vendor:publish --tag=mining --force
   ```

5. **Configure the Module**:
   Open the configuration file located at `config/mining.php` and set the required parameters:
   ```php
   return [
       'corporation_id' => 987654321,
       'refining_efficiency' => 0.75,
       'tax_rates' => [
           'R64' => 15,
           'R32' => 10,
           'R16' => 8,
       ],
       'debug_mode' => false,
   ];
   ```

6. **Clear Cache**:
   ```bash
   php artisan cache:clear
   php artisan config:clear
   php artisan view:clear
   ```

---

## Permissions

The following permissions are required to access the module's features. Configure them in the **Roles & Permissions** section of the SeAT admin panel:

| Permission Key               | Description                                    |
|------------------------------|------------------------------------------------|
| `view mining statistics`     | View mining statistics.                        |
| `manage moons`               | Manage mining moons and their compositions.   |
| `view invoices`              | View and create mining invoices.              |
| `view calendar`              | View the mining calendar.                     |
| `configure mining module`    | Configure the module's settings.              |

---

## Usage

### Mining Statistics
1. Navigate to **Mining > Statistics** in the SeAT menu.
2. View statistics grouped by ore type, quantity, refined output, and waste.

### Moon Management
1. Navigate to **Mining > Moons**.
2. Add, edit, or delete moons and their ore compositions.

### Invoice System
1. Navigate to **Mining > Invoices**.
2. Generate and manage invoices for mining operations.

### Mining Calendar
1. Navigate to **Mining > Calendar**.
2. View upcoming moon extractions in a calendar format.

### Module Settings
1. Navigate to **Mining > Settings**.
2. Configure tax rates, refining efficiency, and debug mode.

---

## Debugging

Enable debug mode by setting the `debug_mode` parameter to `true` in the `config/mining.php` file. Debug logs can be viewed in the database under the `mining_debug_logs` table.

---

## Contribution

Contributions are welcome! If you'd like to contribute to the module, please fork the repository and submit a pull request.

---

## Support

If you encounter issues or have questions, please open an issue on the [GitHub repository](https://github.com/yourusername/seat-mining/issues).

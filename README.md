Installation Process for EVE SeAT 5
To install the Mining Module on your EVE SeAT (version 5), follow the steps below:

1. Requirements
Before starting, ensure the following prerequisites are met:

EVE SeAT version 5 is installed and running.
You have access to the server console where EVE SeAT is deployed.
PHP version 8.0 or higher is installed.
Composer is installed on the server.
2. Installation Steps
Step 1: Download the Module
Navigate to the directory where EVE SeAT is installed:

bash
cd /var/www/seat
Ensure your project is set up to work with Composer.

Install the module using Composer:

bash
composer require yourusername/seat-mining
Step 2: Run Database Migrations
Run the following command to create the necessary database tables:

bash
php artisan migrate
Step 3: Publish Configuration and Resources
Publish the module's configuration and resource files:

bash
php artisan vendor:publish --tag=mining --force
Ensure the module's configuration files are published to the config/ directory.

Step 4: Configure the Module
Open the module's configuration file:

bash
nano config/mining.php
Set the required parameters:

corporation_id: The ID of the corporation to track mining for.
refining_efficiency: The ore refining efficiency (0.0 - 1.0).
tax_rates: Tax rates for different ore types (e.g., R64, R32, R16).
debug_mode: Enable or disable debug mode (true/false).
Example configuration:

PHP
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
Save the changes and close the editor.
3. Configure Permissions
Log in to the EVE SeAT web interface.
Go to the "Roles & Permissions" section to create or edit user roles.
Add the following permissions:
view mining statistics — Allows users to view mining statistics.
manage moons — Allows users to manage moons.
view invoices — Allows users to view and create invoices.
view calendar — Allows users to view the mining calendar.
configure mining module — Allows users to configure the mining module.
4. Verify Installation
Restart the EVE SeAT services to ensure the module is loaded:

bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
Open the SeAT admin interface in your browser and verify that the new Mining Module section appears in the menu.

5. Optional
If you wish to enable debugging for the module, set the debug_mode parameter to true in the config/mining.php file.

<?php

namespace App;

use Illuminate\Support\ServiceProvider;

class MiningServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'mining');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/Config/mining.config.php', 'mining');

        $this->publishes([
            __DIR__.'/Config/mining.config.php' => config_path('mining.php'),
        ], 'config');
    }
}

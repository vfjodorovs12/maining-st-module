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
        // Загрузка маршрутов
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');

        // Загрузка представлений
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'mining');

        // Загрузка миграций
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        // Загрузка конфигурации
        $this->mergeConfigFrom(__DIR__ . '/Config/mining.config.php', 'mining');

        // Публикация конфигурации
        $this->publishes([
            __DIR__ . '/Config/mining.config.php' => config_path('mining.php'),
        ], 'config');

        // Добавление переводов
        $this->loadTranslationsFrom(__DIR__ . '/resources/lang', 'mining');

        // Публикация переводов
        $this->publishes([
            __DIR__ . '/resources/lang' => resource_path('lang/vendor/mining'),
        ], 'translations');
    }
}

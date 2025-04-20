<?php

namespace EVESeat\MiningModule;

use Illuminate\Support\ServiceProvider;
use EVESeat\Services\AbstractSeatPlugin;

class MiningServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Публикация миграций, конфигурации и представлений
        $this->addMigrations();
        $this->addRoutes();
        $this->addViews();
        $this->addTranslations();
        $this->addPublications();
    }

    /**
     * Регистрация сервисов приложения.
     *
     * @return void
     */
    public function register()
    {
        // Регистрация настроек модуля
        $this->mergeConfigFrom(__DIR__ . '/Config/mining.config.php', 'mining.config');
        
        // Регистрация боковой панели
        $this->mergeConfigFrom(__DIR__ . '/Config/mining.sidebar.php', 'package.sidebar');
        
        // Регистрация разрешений
        $this->mergeConfigFrom(__DIR__ . '/Config/mining.permissions.php', 'web.permissions');
    }

    /**
     * Информация о плагине для SeAT
     *
     * @return \EVESeat\Services\AbstractSeatPlugin
     */
    public function getPlugin()
    {
        return new class extends AbstractSeatPlugin {
            public function getName(): string
            {
                return 'Mining Module';
            }

            public function getPackageRepositoryUrl(): string 
            {
                return 'https://github.com/yourusername/mining-module';
            }

            public function getVersion(): string 
            {
                return '1.0.0';
            }

            public function getDescription(): string 
            {
                return 'Модуль для EVE SeAT, отслеживающий добычу руды и формирующий статистику';
            }
        };
    }

    /**
     * Добавление миграций базы данных
     */
    private function addMigrations()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations/');
    }

    /**
     * Добавление маршрутов
     */
    private function addRoutes()
    {
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
    }

    /**
     * Добавление представлений
     */
    private function addViews()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'mining');
    }

    /**
     * Добавление переводов
     */
    private function addTranslations()
    {
        $this->loadTranslationsFrom(__DIR__ . '/resources/lang', 'mining');
    }

    /**
     * Добавление публикаций
     */
    private function addPublications()
    {
        $this->publishes([
            __DIR__ . '/resources/assets' => public_path('mining'),
        ], 'public');
    }
}

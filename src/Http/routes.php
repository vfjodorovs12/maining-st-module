<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiningScanParserController;
use Modules\MainingStModule\Http\Controllers\MiningController;

Route::group(['prefix' => 'mining', 'middleware' => ['auth']], function () {
    // Маршруты для управления настройками
    Route::get('/settings', [MiningController::class, 'settings'])->name('mining.settings');
    Route::post('/settings', [MiningController::class, 'updateSettings'])->name('mining.settings.update');
    
    // Существующие маршруты
    Route::get('/statistics', [MiningController::class, 'statistics'])->name('mining.statistics');
    Route::get('/moons', [MiningController::class, 'moons'])->name('mining.moons');
    Route::get('/invoices', [MiningController::class, 'invoices'])->name('mining.invoices');
    Route::get('/calendar', [MiningController::class, 'calendar'])->name('mining.calendar');
});

// Маршруты для парсинга данных
Route::group([
    'middleware' => ['web', 'auth', 'locale'],
    'prefix' => '/tools/belt-scan-parser'
], function () {
    Route::get('/')
        ->name('scan-parser::parser')
        ->uses([MiningScanParserController::class, 'parser']);

    Route::post('/')
        ->name('scan-parser::parse')
        ->uses([MiningScanParserController::class, 'parse']);
});

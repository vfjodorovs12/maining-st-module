<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiningController;

Route::group(['prefix' => 'mining', 'middleware' => ['auth']], function () {
    // Добавляем маршруты для управления настройками
    Route::get('settings', [MiningController::class, 'settings'])->name('mining.settings');
    Route::post('settings', [MiningController::class, 'updateSettings'])->name('mining.settings.update');
    // Существующие маршруты...
    Route::get('/statistics', [MiningController::class, 'statistics'])->name('mining.statistics');
    Route::get('/moons', [MiningController::class, 'moons'])->name('mining.moons');
    Route::get('/invoices', [MiningController::class, 'invoices'])->name('mining.invoices');
    Route::get('/calendar', [MiningController::class, 'calendar'])->name('mining.calendar');
    Route::get('/settings', [MiningController::class, 'settings'])->name('mining.settings');
    Route::post('/settings', [MiningController::class, 'updateSettings'])->name('mining.settings.update');
});

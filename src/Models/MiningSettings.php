<?php

namespace Modules\MainingStModule\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiningSettings extends Model
{
    use HasFactory;

    protected $fillable = [
        'corporation_id',
        'refining_efficiency',
        'tax_rates',
        'debug_mode',
    ];

    protected $casts = [
        'tax_rates' => 'array',
        'debug_mode' => 'boolean',
    ];

    /**
     * Связь: каждая настройка принадлежит корпорации.
     */
    public function corporation()
    {
        return $this->belongsTo(Corporation::class);
    }

    /**
     * Аксессор для получения процента эффективности переработки.
     */
    public function getRefiningEfficiencyPercentageAttribute()
    {
        return $this->refining_efficiency * 100 . '%';
    }

    /**
     * Мутатор для сохранения эффективности переработки в виде дроби.
     */
    public function setRefiningEfficiencyAttribute($value)
    {
        $this->attributes['refining_efficiency'] = $value / 100;
    }

    /**
     * Скоуп для получения записей с включенным режимом отладки.
     */
    public function scopeDebugMode($query)
    {
        return $query->where('debug_mode', true);
    }

    /**
     * Событие "boot" для обработки событий модели.
     */
    protected static function boot()
    {
        parent::boot();

        // Устанавливаем значение corporation_id по умолчанию при создании записи
        static::creating(function ($model) {
            if (is_null($model->corporation_id)) {
                $model->corporation_id = auth()->user()->corporation_id ?? null;
            }
        });
    }
}

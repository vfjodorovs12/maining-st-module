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
}

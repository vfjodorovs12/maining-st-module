<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiningMoon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'corporation_id',
        'ore_composition',
    ];

    protected $casts = [
        'ore_composition' => 'array',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiningInvoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'character_id',
        'details',
        'total',
        'paid_at',
    ];

    protected $casts = [
        'paid_at' => 'datetime',
    ];
}

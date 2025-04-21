<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScanResult extends Model
{
    protected $table = 'scan_results';

    protected $fillable = [
        'user_id',
        'scan_data',
        'parsed_data',
    ];

    /**
     * Связь с пользователем.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

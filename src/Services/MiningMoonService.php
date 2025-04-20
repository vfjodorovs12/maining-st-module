<?php

namespace App\Services;

use App\Models\MiningMoon;

class MiningMoonService
{
    public static function getAllMoons()
    {
        return MiningMoon::all();
    }

    public static function saveMoon($data)
    {
        return MiningMoon::create($data);
    }
}

<?php

namespace App\Services;

use App\Models\MiningRecord;

class MiningStatisticsService
{
    public static function getMonthlyStatistics($month, $year)
    {
        return MiningRecord::whereYear('mined_at', $year)
            ->whereMonth('mined_at', $month)
            ->get()
            ->groupBy('ore_type')
            ->map(function ($records) {
                return [
                    'total_quantity' => $records->sum('quantity'),
                    'total_refined' => $records->sum('refined_quantity'),
                    'total_waste' => $records->sum('waste'),
                ];
            });
    }
}

<?php

namespace Modules\MainingStModule\Http\Controllers;

use Illuminate\Http\Request;
use Modules\MainingStModule\Models\MiningSettings;

class MiningController extends Controller
{
    public function settings()
    {
        $settings = MiningSettings::firstOrCreate([], [
            'corporation_id' => null,
            'refining_efficiency' => 0.75,
            'tax_rates' => [
                'R64' => 15,
                'R32' => 10,
                'R16' => 8,
            ],
            'debug_mode' => false,
        ]);

        return view('mining.settings', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        $data = $request->validate([
            'corporation_id' => 'nullable|integer',
            'refining_efficiency' => 'nullable|numeric|min:0|max:1',
            'tax_rates' => 'nullable|array',
            'tax_rates.R64' => 'nullable|numeric|min:0',
            'tax_rates.R32' => 'nullable|numeric|min:0',
            'tax_rates.R16' => 'nullable|numeric|min:0',
            'debug_mode' => 'boolean',
        ]);

        $settings = MiningSettings::firstOrCreate([]);
        $settings->update([
            'corporation_id' => $data['corporation_id'] ?? $settings->corporation_id,
            'refining_efficiency' => $data['refining_efficiency'] ?? $settings->refining_efficiency,
            'tax_rates' => $data['tax_rates'] ?? $settings->tax_rates,
            'debug_mode' => $data['debug_mode'] ?? $settings->debug_mode,
        ]);

        return redirect()->route('mining.settings')->with('success', 'Настройки успешно обновлены.');
    }
}

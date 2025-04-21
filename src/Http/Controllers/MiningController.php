<?php

namespace Modules\MainingStModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\MainingStModule\Models\MiningSettings;

class MiningController extends Controller
{
    public function settings()
    {
        $settings = MiningSettings::firstOrCreate([]);
        return view('mining.settings', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        $validated = $request->validate([
            'corporation_id' => 'nullable|integer',
            'refining_efficiency' => 'required|numeric|between:0,1',
            'tax_rates' => 'nullable|array',
            'debug_mode' => 'nullable|boolean',
        ]);

        $settings = MiningSettings::first();
        $settings->update($validated);

        return redirect()->route('mining.settings')->with('success', __('mining.settings_updated'));
    }
}

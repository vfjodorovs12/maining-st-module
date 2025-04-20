<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MiningSettings;

class MiningController extends Controller
{
    public function statistics()
    {
        return view('mining.statistics');
    }

    public function moons()
    {
        return view('mining.moons');
    }

    public function invoices()
    {
        return view('mining.invoices');
    }

    public function calendar()
    {
        $events = []; // Replace with actual events
        return view('mining.calendar', compact('events'));
    }

    public function settings()
    {
        $settings = MiningSettings::first();
        return view('mining.settings', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        $data = $request->validate([
            'corporation_id' => 'required|integer',
            'refining_efficiency' => 'required|numeric|min:0|max:1',
            'debug_mode' => 'boolean',
            'tax_rates' => 'nullable|json',
        ]);

        $settings = MiningSettings::firstOrCreate([], []);
        $settings->update($data);

        return redirect()->route('mining.settings')->with('success', 'Settings updated successfully.');
    }
}

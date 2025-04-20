@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Module Settings</h1>
    <form method="POST" action="{{ route('mining.settings.update') }}">
        @csrf
        <div class="form-group">
            <label for="corporation_id">Corporation ID</label>
            <input type="number" id="corporation_id" name="corporation_id" class="form-control" value="{{ $settings->corporation_id ?? '' }}" required>
        </div>
        <div class="form-group">
            <label for="refining_efficiency">Refining Efficiency</label>
            <input type="number" step="0.01" id="refining_efficiency" name="refining_efficiency" class="form-control" value="{{ $settings->refining_efficiency ?? 0 }}" required>
        </div>
        <div class="form-group">
            <label for="debug_mode">Debug Mode</label>
            <input type="checkbox" id="debug_mode" name="debug_mode" value="1" {{ $settings->debug_mode ? 'checked' : '' }}>
        </div>
        <button type="submit" class="btn btn-primary">Save Settings</button>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Настройки модуля Mining</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('mining.settings.update') }}">
        @csrf

        <div class="form-group">
            <label for="corporation_id">ID Корпорации</label>
            <input type="number" id="corporation_id" name="corporation_id" class="form-control"
                   value="{{ old('corporation_id', $settings->corporation_id) }}">
        </div>

        <div class="form-group">
            <label for="refining_efficiency">Эффективность переработки</label>
            <input type="number" step="0.01" id="refining_efficiency" name="refining_efficiency" class="form-control"
                   value="{{ old('refining_efficiency', $settings->refining_efficiency) }}">
        </div>

        <div class="form-group">
            <label for="tax_rates[R64]">Налог на R64 (%)</label>
            <input type="number" step="0.01" id="tax_rates[R64]" name="tax_rates[R64]" class="form-control"
                   value="{{ old('tax_rates.R64', $settings->tax_rates['R64'] ?? 15) }}">
        </div>

        <div class="form-group">
            <label for="tax_rates[R32]">Налог на R32 (%)</label>
            <input type="number" step="0.01" id="tax_rates[R32]" name="tax_rates[R32]" class="form-control"
                   value="{{ old('tax_rates.R32', $settings->tax_rates['R32'] ?? 10) }}">
        </div>

        <div class="form-group">
            <label for="tax_rates[R16]">Налог на R16 (%)</label>
            <input type="number" step="0.01" id="tax_rates[R16]" name="tax_rates[R16]" class="form-control"
                   value="{{ old('tax_rates.R16', $settings->tax_rates['R16'] ?? 8) }}">
        </div>

        <div class="form-group">
            <label for="debug_mode">Режим отладки</label>
            <input type="checkbox" id="debug_mode" name="debug_mode" value="1"
                   {{ old('debug_mode', $settings->debug_mode) ? 'checked' : '' }}>
        </div>

        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Moon Extraction Calendar</h1>
    <div id="calendar" data-events="{{ json_encode($events) }}"></div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/calendar.js') }}"></script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/mining.css') }}">
@endpush

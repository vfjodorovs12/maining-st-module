@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage Mining Moons</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Moon Name</th>
                <th>Corporation ID</th>
                <th>Ore Composition</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($moons as $moon)
            <tr>
                <td>{{ $moon->name }}</td>
                <td>{{ $moon->corporation_id }}</td>
                <td>
                    @foreach ($moon->ore_composition as $ore => $quantity)
                    {{ $ore }}: {{ $quantity }}<br>
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

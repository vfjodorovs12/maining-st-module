@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mining Statistics</h1>
    <p>Here you can view mining statistics grouped by ore type.</p>
    <table class="table">
        <thead>
            <tr>
                <th>Ore Type</th>
                <th>Total Quantity</th>
                <th>Refined Quantity</th>
                <th>Waste</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($statistics as $oreType => $data)
            <tr>
                <td>{{ $oreType }}</td>
                <td>{{ $data['total_quantity'] }}</td>
                <td>{{ $data['total_refined'] }}</td>
                <td>{{ $data['total_waste'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

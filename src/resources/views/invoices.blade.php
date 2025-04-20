@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mining Invoices</h1>
    <form method="POST" action="{{ route('mining.invoices.create') }}">
        @csrf
        <div class="form-group">
            <label for="character_id">Character ID</label>
            <input type="number" id="character_id" name="character_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="details">Invoice Details</label>
            <textarea id="details" name="details" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="total">Total Amount</label>
            <input type="number" step="0.01" id="total" name="total" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Invoice</button>
    </form>
</div>
@endsection

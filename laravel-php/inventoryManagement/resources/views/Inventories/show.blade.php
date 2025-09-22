@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Inventory Details</div>
    <div class="card-body">
        <p><strong>Product:</strong> {{ $inventory->product->name }}</p>
        <p><strong>Supplier:</strong> {{ $inventory->supplier->name }}</p>
        <p><strong>Quantity:</strong> {{ $inventory->quantity }}</p>
        <p><strong>Purchase Price:</strong> {{ number_format($inventory->purchase_price) }}</p>
        <p><strong>Expiry Date:</strong> {{ $inventory->expiry_date }}</p>

        <a href="{{ route('inventories.index') }}" class="btn btn-secondary">Back to list</a>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h1>Inventory List</h1>
    <a href="{{ route('inventories.create') }}" class="btn btn-success">Add New Inventory</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-primary">
        <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Supplier</th>
            <th>Quantity</th>
            <th>Purchase Price</th>
            <th>Expiry Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($inventories as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->product->name }}</td>
            <td>{{ $item->supplier->name }}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ number_format($item->purchase_price) }}</td>
            <td>{{ $item->expiry_date }}</td>
            <td>
                <a href="{{ route('inventories.show', $item->id) }}" class="btn btn-sm btn-info">View</a>
                <a href="{{ route('inventories.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('inventories.destroy', $item->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"
                        onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

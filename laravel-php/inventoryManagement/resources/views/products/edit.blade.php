@extends('layouts.app')

@section('content')
<h1>Sửa sản phẩm</h1>
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Tên</label>
        <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
    </div>
    <div class="mb-3">
        <label>SKU</label>
        <input type="text" name="sku" class="form-control" value="{{ $product->sku }}" required>
    </div>
    <div class="mb-3">
        <label>Giá</label>
        <input type="number" step="0.01" name="price" class="form-control" value="{{ $product->price }}">
    </div>
    <div class="mb-3">
        <label>Số lượng</label>
        <input type="number" name="quantity" class="form-control" value="{{ $product->quantity }}">
    </div>
    <button type="submit" class="btn btn-success">Cập nhật</button>
</form>
@endsection

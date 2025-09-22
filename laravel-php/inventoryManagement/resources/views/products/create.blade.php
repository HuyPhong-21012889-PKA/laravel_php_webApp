@extends('layouts.app')

@section('content')
<h1>Thêm sản phẩm</h1>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Tên</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>SKU</label>
        <input type="text" name="sku" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Giá</label>
        <input type="number" step="0.01" name="price" class="form-control">
    </div>
    <div class="mb-3">
        <label>Số lượng</label>
        <input type="number" name="quantity" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Lưu</button>
</form>
@endsection

@extends('layouts.app')

@section('content')
<h1>Sửa nhà cung cấp</h1>
<form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Tên</label>
        <input type="text" name="name" class="form-control" value="{{ $supplier->name }}" required>
    </div>
    <div class="mb-3">
        <label>Số điện thoại</label>
        <input type="text" name="phone" class="form-control" value="{{ $supplier->phone }}">
    </div>
    <div class="mb-3">
        <label>Địa chỉ</label>
        <input type="text" name="address" class="form-control" value="{{ $supplier->address }}">
    </div>
    <button type="submit" class="btn btn-success">Cập nhật</button>
</form>
@endsection

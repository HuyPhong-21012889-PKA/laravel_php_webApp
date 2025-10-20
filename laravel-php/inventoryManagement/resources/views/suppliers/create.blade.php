@extends('layouts.app')

@section('content')
<h1>Thêm nhà cung cấp</h1>

<form action="{{ route('suppliers.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Tên</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Số điện thoại</label>
        <input type="text" name="phone" class="form-control">
    </div>
    <div class="mb-3">
        <label>Địa chỉ</label>
        <input type="text" name="address" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Lưu</button>
</form>
@endsection

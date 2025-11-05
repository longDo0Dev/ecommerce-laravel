@extends('layouts.app')

@section('content')
<div class="container">
    <h1>แก้ไขสินค้า</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>ชื่อสินค้า</label>
            <input type="text" name="name" value="{{ $product->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>ราคา</label>
            <input type="number" name="price" value="{{ $product->price }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">บันทึกการแก้ไข</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">กลับ</a>
    </form>
</div>
@endsection

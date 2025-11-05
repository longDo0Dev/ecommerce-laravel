@extends('layouts.layout')

@section('title',$title)

@section('content')
<div class="text-center">
    <h1 class="mb-3">{{ $title }}</h1>
    <p>ยินดีต้อนรับสู่ระบบร้านค้าออนไลน์ของคุณ !</p>
    <a href="#" class="btn btn-primary">ดูสินค้าทั้งหมด</a>
</div>
@endsection
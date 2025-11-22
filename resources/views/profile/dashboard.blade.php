@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('content')
    <p>Selamat datang di Admin Panel</p>

    @php
        $categoriesCount = \App\Models\Category::count();
        $productsCount = \App\Models\Product::count();
    @endphp

    <div>
        Jumlah kategori: {{ $categoriesCount }}
        <br>
        Jumlah produk: {{ $productsCount }}
    </div>

    <table class="table table-bordered table-striped">
        <tr>
            <th>Nama Kategori</th>
            <th>Deskripsi</th>
            <th>Jumlah Produk</th>
            @foreach (\App\Models\Category::all() as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>{{ $category->description }}</td>
            <td>{{ $category->products->count() }} produk</td>
        </tr>
        @endforeach
    </table>

    <table class="table table-bordered table-striped">
        <tr>
            <th>Nama Produk</th>
            <th>Deskripsi</th>
            <th>Harga</th>
        </tr>
        @foreach (\App\Models\Product::all() as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>Rp {{ number_format($product->price, 2, ',', '.') }}</td>
            </tr>
        @endforeach
    </table>

@endsection

@extends('layouts.main')

@section('content')
    <div class="text-center">
        <!-- Judul Besar -->
        <h1 class="display-4 text-secondary fw-bold mb-3">Inventory App</h1>
        
        <!-- Sub Judul -->
        <p class="lead text- mb-4">
            Selamat datang pada aplikasi inventaris sederhana Laravel.
        </p>
        
        <!-- Tombol Aksi -->
        <div>
            <a href="{{ route('products.index') }}" class="btn btn-primary me-2">Kelola Produk</a>
            <a href="{{ route('categories.index') }}" class="btn btn-success text-white">Kelola Kategori</a>

        </div>
    </div>
@endsection
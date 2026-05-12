@extends('layouts.main')

@section('content')
<div class="rounded-4 bg-primary shadow-sm mb-4">
    <div class="p-4 d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
        <div>
            <h1 class="h3 fw-bold text-white mb-1">Edit Barang</h1>
            <p class="text-white-75 mb-0">Perbarui data produk sesuai kebutuhan.</p>
        </div>
        <a href="{{ route('products.index') }}" class="btn btn-light btn-sm px-4">Kembali</a>
    </div>
</div>

<div class="card shadow-sm rounded-4">
    <div class="card-body p-4">
        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')
            @include('products._form')
            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Perbarui</button>
            </div>
        </form>
    </div>
</div>
@endsection
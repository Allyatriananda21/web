@extends('layouts.main')

@section('content')

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show rounded-4 mb-4" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="table-responsive" style="border: none;">
    <table class="table table-sm table-striped table-hover table-bordered align-middle mb-0" style="margin-bottom: 0;">
        <thead>
            <tr class="bg-white border-0">
                <th colspan="8" class="border-0 px-4 py-4">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
                        <div>
                            <h2 class="h4 mb-0">Daftar Barang Inventaris</h2>
                        </div>
                        <a href="{{ route('products.create') }}" class="btn btn-success">+ Tambah Data</a>
                    </div>
                </th>
            </tr>
            <tr class="table-light text-dark">
                <th class="ps-4">No</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th class="text-end">Harga</th>
                <th class="text-center">Stok</th>
                <th>Deskripsi</th>
                <th class="text-center">Status</th>
                <th class="text-center pe-4">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $p)
            <tr>
                <td>{{ $loop->iteration + ($products->currentPage() - 1) * $products->perPage() }}</td>
                <td>{{ $p->name }}</td>
                <td>{{ $p->category->name }}</td>
                <td class="text-end">Rp {{ number_format($p->price, 0, ',', '.') }}</td>
                <td class="text-center">{{ $p->stock }}</td>
                <td class="text-truncate" style="max-width: 260px;">{{ \Illuminate\Support\Str::limit($p->description ?: '-', 70) }}</td>
                <td class="text-center">{{ ucfirst($p->status) }}</td>
                <td class="text-center pe-4">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="{{ route('products.edit', $p) }}" class="btn btn-sm btn-warning text-dark">Update</a>
                        <form action="{{ route('products.destroy', $p) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus produk ini?')">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" class="text-center py-5">
                    Belum ada produk. Klik tombol "+ Tambah Data" untuk menambahkan produk baru.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@if($products->count())
<div class="mt-4 d-flex justify-content-center">
    {{ $products->links() }}
</div>
@endif

@section('footer')
<style>
    footer {
        display: none !important;
    }
</style>
@stop

@endsection

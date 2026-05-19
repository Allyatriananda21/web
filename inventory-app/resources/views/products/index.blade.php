@extends('layouts.main')

@section('content')
<div class="rounded-4 bg-primary shadow-sm mb-4">
    <div class="p-4 d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
        <div>
            <h1 class="h3 fw-bold text-white mb-1">Daftar Barang Inventaris</h1>
            <p class="text-white-75 mb-0">Kelola stok barang dengan tampilan lebih rapi dan terstruktur.</p>
        </div>
        <a href="{{ route('products.create') }}" class="btn btn-light btn-sm px-4">Tambah Barang</a>
    </div>
</div>

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show rounded-4 mb-4" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="card shadow-sm rounded-4 overflow-hidden">
    <div class="card-body p-3">
        <div class="table-responsive">
            <table class="table table-sm table-striped table-hover table-bordered align-middle mb-0">
                <thead class="table-light text-dark">
                    <tr>
                        <th class="ps-4">No</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th class="text-end">Harga</th>
                        <th class="text-center">Stok</th>
                        <th class="text-center">Status</th>
                        <th>Deskripsi</th>
                        <th class="text-center pe-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $p)
                    <tr>
                        <td>{{ $loop->iteration + ($products->currentPage() - 1) * $products->perPage()}}</td>
                        <!-- <td class="ps-4">{{ $loop->iteration }}</td> -->
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->category->name }}</td>
                        <td class="text-end">Rp {{ number_format($p->price, 0, ',', '.') }}</td>
                        <td class="text-center">{{ $p->stock }}</td>
                        <td class="text-center">
                            <span class="badge {{ $p->status === 'tersedia' ? 'bg-success' : ($p->status === 'habis' ? 'bg-danger' : 'bg-secondary') }} px-3 py-2">
                                {{ ucfirst($p->status) }}
                            </span>
                        </td>
                        <td class="text-truncate" style="max-width: 260px;">{{ \Illuminate\Support\Str::limit($p->description ?: '-', 70) }}</td>
                        <td class="text-center pe-4">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('products.edit', $p) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('products.destroy', $p) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus produk ini?')">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="mt-4 d-flex justify-content-center">
    {{ $products->links() }}
</div>
@endsection

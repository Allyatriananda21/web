@extends('layouts.main')

@section('content')
<x-page-header :title="'Daftar Kategori'" :subtitle="'Kelola kategori produk agar daftar lebih rapi.'" :button="['url' => route('categories.create'), 'text' => '+ Tambah Kategori', 'variant' => 'btn-success']" :bg="false" />

@if (session('success'))
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
                        <th>Nama Kategori</th>
                        <th class="text-center pe-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $index => $cat)
                    <tr>
                        <td class="ps-4">{{ $index + 1 }}</td>
                        <td>{{ $cat->name }}</td>
                        <td class="text-center pe-4">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('categories.edit', $cat->id) }}" class="btn btn-sm btn-warning text-dark">Update</a>
                                <form action="{{ route('categories.destroy', $cat->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus Kategori ini?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center py-5">
                            Belum ada kategori. Klik tombol "+ Tambah Kategori" untuk menambahkan kategori baru.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('footer')
<style>
    footer {
        display: none !important;
    }
</style>
@stop
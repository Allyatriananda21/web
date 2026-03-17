@extends('layouts.main')
@section('title', 'Data Dosen')

@section('container')
<h1>Daftar Dosen</h1>
<ol>
    @forelse ($dosen as $namaDosen)
        <li>{{ $namaDosen }}</li>
    @empty
        <div class="alert alert-warning d-inline-block">
            Data tidak ada.. Silahkan isi array untuk data dosen!
        </div>
    @endforelse
</ol>
@endsection
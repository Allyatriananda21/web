@extends('layouts.main')

@section('title')
@section('navMhs', 'active')

@section('content')
<h1>Daftar Mahasiswa Jurusan TI</h1>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>IPK</th>
        <th>Alamat</th>
    </tr>

    @foreach ($students as $student)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $student->nim }}</td>
        <td>{{ $student->nama_lengkap }}</td>
        <td>{{ $student->ipk }}</td>
        <td>{{ $student->alamat }}</td>
    </tr>
    @endforeach

</table>
@endsection
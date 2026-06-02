@extends('layouts.main')

@section('content')
<x-page-header :title="'Input data product'" :subtitle="null" :bg="false" :size="'display-4'" />

<div class="container py-4">
    <div class="row">
        <div class="col-12 col-md-10 col-lg-8">
            <div class="card shadow-sm rounded-4 border-0">
                <div class="card-body p-4">
                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf
                        @include('products._form')
                        <div class="d-flex flex-wrap gap-2 mt-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
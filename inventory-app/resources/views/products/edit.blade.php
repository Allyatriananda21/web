@extends('layouts.main')

@section('content')
<x-page-header :title="'Edit Data Product'" :subtitle="null" :bg="false" :size="'display-4'" />

<div class="container py-4">
    <div class="row">
        <div class="col-12 col-md-10 col-lg-8">
            <div class="card shadow-sm rounded-4 border-0">
                <div class="card-body p-4">
                    <form action="{{ route('products.update', $product) }}" method="POST">
                        @csrf
                        @method('PUT')

                        @php $emptyEditForm = true; @endphp
                        @include('products._form')

                        <div class="d-flex flex-wrap gap-2 mt-3">
                            <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
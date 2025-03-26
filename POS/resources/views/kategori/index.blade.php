@extends('../layout/app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h3>Manage Kategori</h3>
        <a href="{{ route('kategori.create') }}" class="btn btn-primary">+ Add Kategori</a>
    </div>

    <div class="card">
        <div class="card-header">List Kategori</div>
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>
</div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush

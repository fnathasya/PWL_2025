@extends('layout.app')

{{-- Customize layout sections --}}
@section('subtitle', 'Kategori')
@section('content_header_title', 'Manage Kategori')
@section('content_header_subtitle', 'List Kategori')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mb-3">
            <h3>Manage Kategori</h3>
            <a href="{{ route('kategori.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add Kategori
            </a>
        </div>

        <div class="card">
            <div class="card-header bg-primary text-white">
                <strong>List Kategori</strong>
            </div>
            <div class="card-body">
                {{ $dataTable->table(['class' => 'table table-bordered table-striped']) }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush

@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Level')
@section('content_header_title', 'PWL-POS')
@section('content_header_subtitle', 'Jabatan')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Jabatan</div>
            <div class="card-body">
                <a href="{{ route('level.add') }}" class="btn btn-success fileinput-button"><i class="fas fa-plus"></i> Tambah Jabatan</a>
                <br><br>
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
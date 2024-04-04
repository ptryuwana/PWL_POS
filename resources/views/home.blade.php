@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Beranda')
@section('content_header_title', 'Home')
{{-- @section('content_header_subtitle', 'Pengguna') --}}

@section('content')
    {{-- <div class="container">
        <div class="card">
            <div class="card-header">Manage Pengguna</div>
            <div class="card-body">
                <a href="{{ route('user.add') }}" class="btn btn-success fileinput-button"><i class="fas fa-plus"></i> Tambah Pengguna</a>
                <br><br>
                {{ $dataTable->table() }}
            </div>
        </div>
    </div> --}}
@endsection

@push('scripts')
    {{-- {{ $dataTable->scripts() }} --}}
@endpush
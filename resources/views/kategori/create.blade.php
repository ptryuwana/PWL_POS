@extends('layouts.app')

@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Create')

@section('content')

    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Buat kategori baru</h3>
            </div>
            
            <form method="post" action="../kategori">
                <div class="card-body">
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                    <div class="form-group">
                        <label for="kategori_kode">Kode Kategori</label>
                        <input type="text" class="form-control @error('kategori_kode') is-invalid @enderror" name="kategori_kode" id="kategori_kode" placeholder="Masukkan Kode Kategori...">
                        @error('kategori_kode')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kategori_nama">Nama Kategori</label>
                        <input type="text" class="form-control @error('kategori_nama') is-invalid @enderror" name="kategori_nama" id="namaKategori" placeholder="Masukkan Nama Kategori...">
                        @error('kategori_nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection
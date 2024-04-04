@extends('layouts.app')

@section('subtitle', 'Level')
@section('content_header_title', 'Jabatan')
@section('content_header_subtitle', 'Tambah')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Tambah Jabatan/Posisi Baru</h3>
            </div>

            <form class="form-horizontal" method="post" action="../level">
                {{ csrf_field() }}

                <div class="card-body">
                    <div class="form-group row">
                        <label for="level_nama" class="col-sm-2 col-form-label">Jabatan/Posisi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('level_nama') is-invalid @enderror" name="level_nama" id="level_nama" placeholder="Masukkan Jabatan/Posisi...">
                                @error('level_nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="level_kode" class="col-sm-2 col-form-label">Kode Jabatan/Posisi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('level_kode') is-invalid @enderror" name="level_kode" id="level_kode" placeholder="Masukkan Kode...">
                                @error('level_kode')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck2" required>
                                <label class="form-check-label" for="exampleCheck2">Pastikan data yang anda masukkan sudah benar</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-success fileinput-button">Tambahkan</button>
                    <a href="{{ route('level.back') }}" class="btn btn-default float-right">Cancel</a>
                </div>

            </form>
        </div>
    </div>
@endsection
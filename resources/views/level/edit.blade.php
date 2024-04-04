@extends('layouts.app')

@section('subtitle', 'Level')
@section('content_header_title', 'Jabatan')
@section('content_header_subtitle', 'Edit')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Edit Data Jabatan/Posisi</h3>
            </div>

            <form method="post" action="../{{ $data->level_id }}">

                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="card-body">
                    <div class="form-group row">
                        <label for="level_nama" class="col-sm-2 col-form-label">Jabatan/Posisi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="level_nama" id="level_nama" value="{{ $data->level_nama }}">
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="level_kode" class="col-sm-2 col-form-label">Kode Jabatan/Posisi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="level_kode" id="level_kode" value="{{ $data->level_kode }}">
                            </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck2" required>
                                <label class="form-check-label" for="exampleCheck2">Pastikan data sudah benar</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update Data</button>
                    <a href="{{ route('level.back') }}" class="btn btn-default float-right">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">posisi Pekerjaan</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Tambah Posisi Pekerjaan</li>
            </ol>
            <a href="/posisi" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/posisi/simpan-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Posisi</label>
                        <input type="text" class="form-control" name="nama_posisi" required>
                    </div>
                    <div class="form-group mt-3">
                        <button class="form-control btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

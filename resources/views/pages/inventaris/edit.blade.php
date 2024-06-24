@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Inventaris</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Tambah Data Inventaris</li>
            </ol>
            <a href="/inventaris" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/inventaris/update/{{ $inventaris_restoranData->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" value="{{ $inventaris_restoranData->nama }}" class="form-control" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="">Kode</label>
                        <input type="text" value="{{ $inventaris_restoranData->kode }}" class="form-control" name="kode" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Barang</label>
                        <input type="text" value="{{ $inventaris_restoranData->jumlah_barang }}" class="form-control" name="jumlah_barang" required>
                    </div>
                    <div class="form-group mt-3">
                        <button class="form-control btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

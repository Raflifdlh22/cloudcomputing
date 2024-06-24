@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Kategori Menu</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Tambah Kategori Menu</li>
            </ol>
            <a href="/kategori_menu" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/kategori_menu/update/{{$kategori_menuData->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama kategori</label>
                        <input type="text" value="{{ $kategori_menuData->nama_kategori }}" class="form-control" name="nama_kategori" required>
                    </div>
                    <div class="form-group mt-3">
                        <button class="form-control btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">menu</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Edit menu</li>
            </ol>
            <a href="/pegawai" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/menu/update/{{ $menuData->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" value="{{ $menuData->nama_menu }}"class="form-control" name="nama_menu" required>
                    </div>
                    <div class="form-group">
                        <label for="">harga</label>
                        <input type="text" class="form-control" value="{{ $menuData->harga }}" name="harga" required>
                    </div>
                    <div class="form-group">
                        <label for="">kontak</label>
                        <input type="text" value="{{ $menuData->kontak }}" class="form-control" name="kontak" required>
                    </div>
                    <div class="form-group">
                        <label for="kategori_menu_id">Kategori Menu</label>
                        <select name="kategori_menu_id" class="form-control" required>
                            @foreach ($kategori_menuData as $kategori_menu)
                                <option value="{{ $kategori_menu->id }}">{{ $kategori_menu->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <button class="form-control btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

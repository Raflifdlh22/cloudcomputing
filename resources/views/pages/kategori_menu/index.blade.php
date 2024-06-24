@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">kategori Menu</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Data Kategori Menu</li>
            </ol>
            <a href="/kategori_menu/create" class="btn btn-primary">Tambah Kategori</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
            <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Kategori</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori_menuData as $kategori_menu)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$kategori_menu->nama_kategori}}</td>
                                    <td>
                                        <a href="/kategori_menu/edit/{{$kategori_menu->id}}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="/kategori_menu/delete/{{$kategori_menu->id}}" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

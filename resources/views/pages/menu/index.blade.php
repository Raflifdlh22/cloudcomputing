@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Menu</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Data Menu</li>
            </ol>
            <a href="/menu/create" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
            <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>nama menu</th>
                                <th>harga</th>
                                <th>kontak</th>
                                <th>kategori Menu</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($menuData as $menu)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$menu->nama_menu}}</td>
                                    <td>{{$menu->harga}}</td>
                                    <td>{{$menu->kontak}}</td>
                                    <td>{{$menu->kategori_menu_id}}</td>
                                    <td>
                                        <a href="/menu/edit/{{$menu->id}}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="/menu/delete/{{$menu->id}}" class="btn btn-danger btn-sm">Hapus</a>
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

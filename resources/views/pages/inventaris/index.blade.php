@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Inventaris</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Data Inventaris Restoran</li>
            </ol>
            <a href="/inventaris/create" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
            <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Kode</th>
                                <th>jumlah_barang</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inventaris_restoranData as $inventaris_restoran)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$inventaris_restoran->nama}}</td>
                                    <td>{{$inventaris_restoran->kode}}</td>
                                    <td>{{$inventaris_restoran->jumlah_barang}}</td>

                                    <td>
                                        <a href="/inventaris/edit/{{$inventaris_restoran->id}}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="/inventaris/delete/{{$inventaris_restoran->id}}" class="btn btn-danger btn-sm">Hapus</a>
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

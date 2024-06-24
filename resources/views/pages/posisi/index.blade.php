@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Posisi Pekerjaan</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Data Posisi Pekerjaan</li>
            </ol>
            <a href="/posisi/create" class="btn btn-primary">Tambah Posisi Pekerjaan</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
            <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Posisi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posisi_pekerjaanData as $User)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$User->nama_posisi}}</td>
                                    <td>
                                        <a href="/posisi/edit/{{$User->id}}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="/posisi/delete/{{$User->id}}" class="btn btn-danger btn-sm">Hapus</a>
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

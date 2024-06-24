@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">pegawai</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Data Pegawai</li>
            </ol>
            <a href="/pegawai/create" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
            <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>nip</th>
                                <th>posisi_pekerjaan</th>
                                <th>kontak</th>
                                <th>alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawaiData as $Pegawai)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$Pegawai->nama}}</td>
                                    <td>{{$Pegawai->nip}}</td>
                                    <td>{{$Pegawai->posisi_pekerjaan_id}}</td>
                                    <td>{{$Pegawai->kontak}}</td>
                                    <td>{{$Pegawai->alamat}}</td>

                                    <td>
                                        <a href="/pegawai/edit/{{$Pegawai->id}}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="/pegawai/delete/{{$Pegawai->id}}" class="btn btn-danger btn-sm">Hapus</a>
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

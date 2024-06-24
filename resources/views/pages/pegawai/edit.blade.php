@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Pegawai</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Edit Pegawai</li>
            </ol>
            <a href="/pegawai" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/pegawai/update/{{ $pegawaiData->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" value="{{ $pegawaiData->nama }}" class="form-control" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="">NIP</label>
                        <input type="text" value="{{ $pegawaiData->nip }}" class="form-control" name="nip" required>
                    </div>
                    <div class="form-group">
                        <label for="">Posisi Pekerjaan</label>
                        <select name="posisi_pekerjaan_id" id="" class="form-control" required>
                            @foreach ($posisi_pekerjaanData as $posisi)
                                <option value="{{ $posisi->id }}">{{ $posisi->nama_posisi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">kontak</label>
                        <input type="text" value="{{ $pegawaiData->kontak }}" class="form-control" name="kontak" required>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" value="{{ $pegawaiData->alamat }}" class="form-control" name="alamat" required>
                    </div>
                    <div class="form-group mt-3">
                        <button class="form-control btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

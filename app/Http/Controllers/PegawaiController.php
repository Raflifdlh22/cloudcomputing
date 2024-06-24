<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\models\Posisi_pekerjaan;

class PegawaiController extends Controller
{
    //menampilkan data
    function index(){
        $pegawaiData = Pegawai::get();
        return view('pages.pegawai.index', compact('pegawaiData'));
    }

    // menambahkan data

    function store(Request $request)
    {
        // validasi data yang masuk
        $pegawaiData = $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'posisi_pekerjaan_id' => 'required',
            'kontak' => 'required',
            'alamat' => 'required',
            

        ]);
        // simpan kedalam database
        Pegawai::create($pegawaiData);
        // mengalihkan ke halaman awal
        return redirect()->to('/pegawai');
        $pegawaiData = Pegawai::get();
        return view('pages.pegawai.create', compact('pegawaiData'));
    }

    function create()
    {
        $posisi_pekerjaanData = Posisi_pekerjaan::get();
        return view('pages.pegawai.create', compact('posisi_pekerjaanData'));
    }

    // update data
    function update($id, Request $request)
    {
        // validasi data yang masuk
        $validasipegawai = $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'posisi_pekerjaan_id' => 'required',
            'kontak' => 'required',
            'alamat' => 'required',
        ]);
        // simpan kedalam database
        Pegawai::find($id)->update($validasipegawai);
        return redirect()->to('/pegawai');
    }

    function edit($id)
    {
        $pegawaiData = Pegawai::find($id);
        $posisi_pekerjaanData = Posisi_pekerjaan::all();
        return view('pages.pegawai.edit', compact('pegawaiData','posisi_pekerjaanData'));
    }

    // hapus data
    function delete($id)
    {
        $pegawaidata = Pegawai::find($id);
        $pegawaidata->delete();


        return redirect()->to('/pegawai');
    }
}

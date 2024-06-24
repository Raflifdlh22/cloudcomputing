<?php

namespace App\Http\Controllers;
use App\Models\Posisi_pekerjaan;

use Illuminate\Http\Request;

class Posisi_pekerjaanController extends Controller
{
    function index()
    {
        $posisi_pekerjaanData = Posisi_pekerjaan::get();
        return view('pages.posisi.index', ['posisi_pekerjaanData' => $posisi_pekerjaanData]);
    }
    
    function create()
    {
        return view('pages.posisi.create');
    }

    function store(Request $request)
    {
        $posisi_pekerjaanData = new Posisi_pekerjaan;
        $posisi_pekerjaanData->nama_posisi = $request->nama_posisi;
        $posisi_pekerjaanData->save();

        return redirect()->to('/posisi')->with('succes', 'Data posisi_pekerjaan sukses disimpan');
    }

    function edit($id)
    {
        $posisi_pekerjaanData = Posisi_pekerjaan::find($id);
        return view('pages.posisi.edit', ['posisi_pekerjaanData' => $posisi_pekerjaanData]);
    }

    function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'nama_posisi' => 'required'
        ]);

        $posisi_pekerjaanData = Posisi_pekerjaan::find($id);
        $posisi_pekerjaanData->update($validatedData);

        return redirect()->to('/posisi')->with('succes', 'Data posisi_pekerjaan berhasil diupdate');
    }

    function delete($id)
    {
        $posisi_pekerjaanData = Posisi_pekerjaan::find($id);
        $posisi_pekerjaanData->delete();

        return redirect()->to('/posisi')->with('succes', 'Data posisi_pekerjaan telah dihapus');
    }
}

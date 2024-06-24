<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Inventaris_restoran;

class Inventaris_restoranController extends Controller
{
    //menampilkan data
    public function index(){
        $inventaris_restoranData = Inventaris_restoran::get();
        return view('pages.inventaris.index', compact('inventaris_restoranData'));
    }

    // menambahkan data

    public function store(Request $request)
    {
        // validasi data yang masuk
        $inventaris_restoranData = $request->validate([
            'nama' => 'required',
            'kode' => 'required',
            'jumlah_barang' => 'required',
        ]);
        
        // simpan kedalam database
        Inventaris_restoran::create($inventaris_restoranData);
        // mengalihkan ke halaman awal
        return redirect()->to('/inventaris');
    }

    public function create()
    {
        return view('pages.inventaris.create');
    }

    // update data
    public function update($id, Request $request)
    {
        // validasi data yang masuk
        $inventaris_restoran = $request->validate([
            'nama' => 'required',
            'kode' => 'required',
            'jumlah_barang' => 'required',
        ]);
        // simpan kedalam database
        Inventaris_restoran::find($id)->update($inventaris_restoran);
        return redirect()->to('/inventaris');
    }

    public function edit($id)
    {
        $inventaris_restoranData = Inventaris_restoran::find($id);
        return view('pages.inventaris.edit', compact('inventaris_restoranData'));
    }

    // hapus data
    public function delete($id)
    {
        $inventaris_restoranData = Inventaris_restoran::find($id);
        $inventaris_restoranData->delete();


        return redirect()->to('/inventaris');
    }
}

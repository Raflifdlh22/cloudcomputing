<?php

namespace App\Http\Controllers;

use App\Models\Kategori_menu;
use Illuminate\Http\Request;

class Kategori_menuController extends Controller
{
    public function index()
    {
        $kategori_menuData = Kategori_menu::get();
        return view('pages.kategori_menu.index', ['kategori_menuData' => $kategori_menuData]);
    }
    
    public function create()
    {
        return view('pages.kategori_menu.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_kategori' => 'required'
        ]);
        Kategori_menu::create($validatedData);

        return redirect()->to('/kategori_menu')->with('success', 'Data kategori_menu berhasil disimpan');
    }

    public function edit($id)
    {
        $kategori_menuData = Kategori_menu::find($id);
        return view('pages.kategori_menu.edit', ['kategori_menuData' => $kategori_menuData]);
    }

    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'nama_kategori' => 'required'
        ]);

        $kategori_menuData = Kategori_menu::findOrFail($id);
        $kategori_menuData->update($validatedData);

        return redirect()->to('/kategori_menu')->with('success', 'Data kategori_menu berhasil diupdate');
    }

    public function delete($id)
    {
        $kategori_menuData = Kategori_menu::find($id);
        $kategori_menuData->delete();

        return redirect()->to('/kategori_menu')->with('succes', 'Data kategori_menu telah dihapus');
    }
}

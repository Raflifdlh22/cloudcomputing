<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\models\Kategori_menu;

class MenuController extends Controller
{
    //menampilkan data
    function index(){
        $menuData = Menu::get();
        return view('pages.menu.index', compact('menuData'));
    }

    // menambahkan data

    function store(Request $request)
    {
        // validasi data yang masuk
        $menuData = $request->validate([
            'nama_menu' => 'required',
            'harga' => 'required',
            'kontak' => 'required',
            'kategori_menu_id' => 'required',
            

        ]);
        // simpan kedalam database
        Menu::create($menuData);
        // mengalihkan ke halaman awal
        return redirect()->to('/menu');
        $menuData = Menu::get();
        return view('pages.menu.create', compact('menuData'));
    }

    function create()
    {
        $kategori_menuData = Kategori_menu::get();
        return view('pages.menu.create', compact('kategori_menuData'));
    }

    // update data
    function update($id, Request $request)
    {
        // validasi data yang masuk
        $menuData = $request->validate([
            'nama_menu' => 'required',
            'harga' => 'required',
            'kontak' => 'required',
            'kategori_menu_id' => 'required',
        ]);
        // simpan kedalam database
        Menu::find($id)->update($menuData);
        return redirect()->to('/menu');
    }

    function edit($id)
    {
        $menuData = Menu::find($id);
        $kategori_menuData = Kategori_menu::all();
        return view('pages.menu.edit', compact('menuData', 'kategori_menuData'));
    }

    // hapus data
    function delete($id)
    {
        $menuData = Menu::find($id);
        $menuData->delete();


        return redirect()->to('/menu');
    }
}


<?php

namespace App\Http\Controllers;
use App\Models\Menu;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $menuData = Menu::get();
        return view('pages.home.index', compact('menuData'));
    }
}
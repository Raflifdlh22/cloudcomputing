<?php

namespace App\Http\Controllers\Auth;
use App\Models\Menu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class LoginController extends Controller
{
    public  function index()
    {
        $menuData = Menu::get();
        return view('pages.auth.login', compact('menuData'));
    }

    public function login(Request $request)
    {
        // validaasi data
        $validatedUser = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        //proses login, dicek apakah sudah sesuai dengan data di database
        if(Auth::attempt($validatedUser)) {
            $request->session()->regenerate();
            //redirect ke halaman selanjutnya
            return redirect()->to('/menu');
        } else {
            //redirect ke halaman login lagi
            return redirect()->back();
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to('/login');
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showlogin()
    {
        return view('template.login');
    }

    function loginProcess()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            return redirect('beranda')->with('succes', 'Login Berhasil');
        } else {
            return back()->with('danger', 'Login Gagal,Silahkan Cek Email dan Password anda');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('beranda');
    }

    function registration()
    {
    }
}

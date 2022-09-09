<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    function showberanda()
    {
        return view('beranda');
    }

    function showProduk()
    {
        return view('produk');
    }

    function showKategori()
    {
        return view('kategori');
    }
}

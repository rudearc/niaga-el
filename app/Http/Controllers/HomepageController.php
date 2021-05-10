<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $data = array('title' => 'Niaga-el');
        return view('homepage.index', $data);
    }

    public function about() {
        $data = array('title' => 'Niaga-el | Tentang Kami');
        return view('homepage.about', $data);
    }

    public function kontak() {
        $data = array('title' => 'Niaga-el | Kontak Kami');
        return view('homepage.kontak', $data);
    }

    public function kategori() {
        $data = array('title' => 'Niaga-el | Kategori Produk');
        return view('homepage.kategori', $data);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $data = array('title' => 'Niaga-el | Form Laporan Penjualan');
        return view('laporan.index', $data);
    }

    public function proses() {
        $data = array('title' => 'Niaga-el | Laporan Penjualan');
        return view('laporan.proses', $data);
    }
}

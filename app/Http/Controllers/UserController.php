<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $data = array('title' => ' Niaga-el | User Profil');
        return view('user.index', $data);
    }

    public function setting() {
        $data = array('title' => 'Niaga-el | Setting Profil');
        return view('user.setting', $data);
    }
}

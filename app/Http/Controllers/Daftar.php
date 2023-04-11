<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Daftar extends Controller
{
    public function index()
    {
        return view('Anggota/daftar');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CetakKartu extends Controller
{
    public function index()
    {
        return view('Anggota/cetakkartu');
    }
}

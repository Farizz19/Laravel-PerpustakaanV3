<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CetakKartuController extends Controller
{
    public function index()
    {
        return view('Anggota/cetakkartu');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataBukuController extends Controller
{
public function index()
    {
        return view('Buku/databuku');
    }
}

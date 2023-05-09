<?php

namespace App\Http\Controllers;

use App\Models\DataPenggunaModel;
use Illuminate\Http\Request; 
class DataPenggunaController extends Controller
{
    public function index()
    {
        $user = DataPenggunaModel::get();
        print_r($user[0]);

        return view('Data Pengguna/datapengguna');
    }

    public function tambah()
    {
        return view('Data Pengguna/tambahpengguna');
    }
}

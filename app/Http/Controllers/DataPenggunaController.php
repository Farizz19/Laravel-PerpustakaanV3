<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\DataPenggunaModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class DataPenggunaController extends Controller
{
    public function index()
    {
        $user = DataPenggunaModel::get();

        $judul = 'Hapus Pengguna!';
        $keterangan = "Apakah Kamu Yakin Ingin Menghapus Pengguna?";
        confirmDelete($judul, $keterangan);

        return view('Data Pengguna/datapengguna',
        compact('user')
        );
    }

    public function tambah()
    {
        return view('Data Pengguna/tambahpengguna');
    }
    
    public function simpanpengguna(Request $request)
    {

        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
            'level' => 'required'
        ]);
        
        DataPenggunaModel::insert([
            'username' => $request->username,
            'password' => Hash::make($request->username),
            'level' => $request->level,

        ]);

        Alert::success('Sukses','Data Berhasil Ditambah');

        // Alert::success('Register success','Selamat');

        return redirect('/datapengguna');
        // echo $username, $password, $level;
    }

    public function hapuspengguna($user_id)
    {

        DataPenggunaModel::where('user_id', $user_id)->delete();

        Alert::success('Sukses','Data Berhasil Dihapus');

        return redirect('/datapengguna');
    }

    public function ubahpengguna($user_id)
    {

        $user = DataPenggunaModel::where(
            'user_id', $user_id) -> get();
        

        return view ('Data Pengguna/ubahpengguna',
        compact('user'));
        
    }

    public function simpanubahpengguna(Request $request, $user_id)
    {

        $request->validate([
            'username' => 'required',
            'level' => 'required'
        ]);
        
        if($request->password == ''){
        DataPenggunaModel::where('user_id', $user_id)->update([
            'username' => $request->username,
            'level' => $request->level
        ]);} else {
            DataPenggunaModel::where('user_id', $user_id)->update([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level' => $request->level,
        ]);}

        Alert::success('Sukses','Data Berhasil Diubah!');

        return redirect('/datapengguna');

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\DataPenggunaModel;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class AuthController extends Controller
{

    public function indexlogin(){

        // $judul = 'Keluar!';
        // $keterangan = "Apakah Kamu Yakin Ingin Keluar?";
        // confirmDelete($judul, $keterangan);

        return view('/Login/login');
    }

    public function proseslogin(Request $request){

        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6'
        ]);

        $user = DataPenggunaModel::where([
            'username' => $request->username
        ])->get();

        // print_r($user);
        // exit;
        // echo $request->username, $request->password;

        if (count($user) > 0)
        {
            if (Hash::check($request->password, $user[0]->password)){
                $request->session()->put('login', 1);
                $request->session()->put('username', $user[0]->username);
                $request->session()->put('level', $user[0]->level);
                Alert::success('Selamat Datang!', 'Di Pepustakaan V3');
                return redirect('/dashboard');
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }

    public function logout(Request $request){
        $request->session()->forget(['login', 'username', 'password']);
        $request->session()->flush();
        return redirect('/');
    }

        // if(Auth::attempt($request->only('username', 'password'))){
        //     return redirect('/dashboard');
        // } else {
        //     return redirect('/');

        // }

        // if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
        //     $request->session()->regenerateToken();
        //     return redirect('/');
        // }
        // return back();

        // $login = $request->validate([
        //     'username' => 'required',
        //     'password' => 'required'
        // ]);

        // if(Auth::attempt($login)){
        //     $request->session()->regenerate();

        //     return redirect()->intended('/');
        // }

        // return back();


        // $success = auth()->attempt([
        // 'username' => request('username'),
        // 'password' => request('password')
        // ], request()->has('remember'));

        // if($success) {
        //     return redirect()->to(RouteServiceProvider::HOME);
        // }

        // return back()->with('gagal','gagal login');

        // if(!Auth::attempt(['username' => $request->username, 'password' => $request->password])){
        //     return redirect()->back();
        // }

        // return redirect()->route('/');
    
        // $credentials = $request->validate([
        //     'username' => ['required', 'string'],
        //     'password' => ['required'],
        // ]);
 
        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
 
        //     return redirect()->intended('/');
        // }

        // return back();

    //     $login = $request->validate([
    //     'username' => 'required',
    //     'password' => 'required',
    // ]);

    // if (Auth::attempt($login)) {
    //     // Autentikasi berhasil
    //     // return redirect('/');
    //         return 'sukses';
    // }

    // // return redirect()->back();
    //     return 'gagal login';

        // Validator::make($request->all(), [
        //     'username' => 'required',
        //     'password' => 'required'
        //     ])->validate();

        // if(Auth::attempt($request->only('username','password'), $request->boolean('remember'))){
        //     throw ValidationException::withMessages([
        //         'username' => trans('/Login/login')
        //     ]);
        // }
        // $request->session()->regenerate();

        // return redirect('/');

        // // Session::flash('username', $request->username);     
        // $request->validate([
        //     'username'=>'required',
        //     'password'=>'required'
        // ], [
        //     'username.required'=>'Nama Wajib Diisi',
        //     'password.required'=>'Kata Sandi Wajib Diisi',
        // ]);

        // $login = ($request->only('username', 'password'));

        // $login = [
        //     'username' => $request->username,
        //     'password' => $request->password
        // ];

        // if(Auth::attempt($login)){
        //     // return 'sukses';
        //     return redirect('/');
        // } 
        //     // return 'gagal';
        //     // Alert::success('Gagal','Anda Gagal Login');
        //     return back();
        
    }


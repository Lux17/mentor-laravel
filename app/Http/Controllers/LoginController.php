<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        }else{
            return view('login');
        }
        return view('login');
    }

    public function actionlogin(Request $request)
    {
        $credentials = $request->only('username', 'password');
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            // Validasi berhasil, cek apakah pengguna memiliki peran admin
            if (Auth::user()->rolename === 'admin') {
                // Jika pengguna adalah admin, arahkan ke area admin
                return view('admin.dashboard');
            } else {
                // Jika pengguna bukan admin, logout dan arahkan ke halaman lain
                return view('user.dashboard');
            }
        } else {
            // Jika validasi gagal, kembalikan ke halaman login dengan pesan error
            return redirect()->back()->withInput($request->only('username'))->with('error', 'Login gagal! Cek kembali username dan password Anda.');
        }
    }


    public function actionlogout()
    {
        Auth::logout();
        return redirect('');

    }
}

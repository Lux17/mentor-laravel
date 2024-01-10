<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('admin');
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
                session()->start();
                $tampil_mentor = DB::table('users')->where('rolename','mentor')->get();
                $count_mentor = DB::table('users')->where('rolename','mentor')->get()->count();
                $count_mentee = DB::table('users')->where('rolename','mentee')->get()->count();
                $count_learn = DB::table('learningpath')->count();
                $count_tugas = DB::table('tugas')->count();
                $count_log = DB::table('logbook')->count();
                $user = DB::table('users')->get();
                return view('admin.index', ['user' => $user,'count_tugas' =>  $count_tugas,'count_learn' =>  $count_learn, 'count_mentee' =>  $count_mentee, 'count_mentor' =>  $count_mentor, 'count_log' =>  $count_log, 'tampil_mentor' =>  $tampil_mentor ]);
                // Jika pengguna adalah admin, arahkan ke area admin
                // return view('admin.dashboard');
            }else if(Auth::user()->rolename === 'mentor') {

                $akunku = request()->username;
                $id_mentorku = \Auth::user()->id_user;
                $count_tugas = DB::table('tugas')->where('id_users',$id_mentorku)->get()->count();
                $count_log = DB::table('logbook')->where('id_users',$id_mentorku)->get()->count();
                $tampil_akun = DB::table('users')->where('username',$akunku)->get();
                // Jika pengguna bukan admin, logout dan arahkan ke halaman lain
              
                return view('mentor.index',['count_tugas' =>  $count_tugas,  'count_log' =>  $count_log,'tampil_akun'  => $tampil_akun]);
            }
             else {

                $akunku = request()->username;
                $id_userku = \Auth::user()->id_user;
                $count_tugas = DB::table('tugas')->where('id_users',$id_userku)->get()->count();
                $count_log = DB::table('logbook')->where('id_users',$id_userku)->get()->count();
                $tampil_akun = DB::table('users')->where('username',$akunku)->get();
                // Jika pengguna bukan admin, logout dan arahkan ke halaman lain
              
                return view('user.index',['count_tugas' =>  $count_tugas,  'count_log' =>  $count_log,'tampil_akun'  => $tampil_akun]);
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

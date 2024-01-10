<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;




class UserdashController extends Controller
{

    
    
    public function index_user()
    {
        $akunku = request()->username;
        $id_userku = \Auth::user()->id_user;
        $count_tugas = DB::table('tugas')->where('id_users',$id_userku)->get()->count();
        $count_log = DB::table('logbook')->where('id_users',$id_userku)->get()->count();
        $tampil_akun = DB::table('users')->where('username',$akunku)->get();
        // Jika pengguna bukan admin, logout dan arahkan ke halaman lain
 
        return view('user.index',['count_tugas' =>  $count_tugas,  'count_log' =>  $count_log,'tampil_akun'  => $tampil_akun]);
    }

    public function index_mentor()
    {
        $akunku = request()->username;
        $id_userku = \Auth::user()->id_user;
        $count_tugas = DB::table('tugas')->where('id_users',$id_userku)->get()->count();
        $count_log = DB::table('logbook')->where('id_users',$id_userku)->get()->count();
        $tampil_akun = DB::table('users')->where('username',$akunku)->get();
        // Jika pengguna bukan admin, logout dan arahkan ke halaman lain
 
        return view('mentor.index',['count_tugas' =>  $count_tugas,  'count_log' =>  $count_log,'tampil_akun'  => $tampil_akun]);
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('');

    }
}
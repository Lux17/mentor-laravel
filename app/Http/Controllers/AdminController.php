<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;




class AdminController extends Controller
{

    
    
    public function index()
    {
        $tampil_mentor = DB::table('users')->where('rolename','mentor')->get();
        $count_mentor = DB::table('users')->where('rolename','mentor')->get()->count();
        $count_mentee = DB::table('users')->where('rolename','mentee')->get()->count();
        $count_learn = DB::table('learningpath')->count();
        $count_tugas = DB::table('tugas')->count();
        $count_log = DB::table('logbook')->count();
        return view('admin.index', ['count_tugas' =>  $count_tugas,'count_learn' =>  $count_learn, 'count_mentee' =>  $count_mentee, 'count_mentor' =>  $count_mentor, 'count_log' =>  $count_log, 'tampil_mentor' =>  $tampil_mentor ]);
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('');

    }
}
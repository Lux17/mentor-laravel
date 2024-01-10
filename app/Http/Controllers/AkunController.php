<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;




class AkunController extends Controller
{

    
    
    public function index()
    {

        session()->start();
        $user= DB::table('users')->get();
        return view('admin.akun', ['user' => $user]);
    }

    
    public function simpan(Request $request)
    {

        session()->start();
        $pass = Hash::make(request()->password);
            DB::table('users')->insert([
                'id_user'=> request()->id_user,
                'name'=> request()->name,
                'username'=> request()->username,
                'password'=> $pass,
                'rolename'=> request()->rolename,
                'batch'=> request()->batch,
                'mentor'=> request()->mentor,
                'tgl_lahir'=> request()->tgl_lahir,
                'kota'=> request()->kota,
                'univ'=> request()->univ,

            ]);

            $user = DB::table('users')->get();
            session()->flash('success', 'Data berhasil disimpan.');
            return view('admin.akun', ['user' => $user]);
    }
    

    public function update(Request $request,$id_user)
    {
      session()->start();
      $pass = Hash::make(request()->password);
      $preferences = DB::table('users')->where('id_user', $id_user)
      ->update([
        'id_user'=> request()->id_user,
        'name'=> request()->name,
        'username'=> request()->username,
        'password'=> $pass,
        'rolename'=> request()->rolename,
        'batch'=> request()->batch,
        'mentor'=> request()->mentor,
        'tgl_lahir'=> request()->tgl_lahir,
        'kota'=> request()->kota,
        'univ'=> request()->univ,
      ]);
      session()->flash('success', 'Data berhasil diupdate.');
      $user= DB::table('users')->get();
      return view('admin.akun', ['user' => $user]);
    }

      



    public function hapus($id_user)
    {
        session()->start();
        $user = DB::table('users')->where('id_user', $id_user)->delete();
        $user = DB::table('users')->get();
        session()->flash('success', 'Data berhasil di hapus ☑️');
        return view('admin.akun', ['user' => $user]);
        
    }


    public function index_mentor()
    {

        session()->start();
        $user= DB::table('users')->get();
        return view('mentor.akun', ['user' => $user]);
    }

    
    public function simpan_mentor(Request $request)
    {

        session()->start();
        $pass = Hash::make(request()->password);
            DB::table('users')->insert([
                'id_user'=> request()->id_user,
                'name'=> request()->name,
                'username'=> request()->username,
                'password'=> $pass,
                'rolename'=> request()->rolename,
                'batch'=> request()->batch,
                'mentor'=> request()->mentor,
                'tgl_lahir'=> request()->tgl_lahir,
                'kota'=> request()->kota,
                'univ'=> request()->univ,

            ]);

            $user = DB::table('users')->get();
            session()->flash('success', 'Data berhasil disimpan.');
            return view('mentor.akun', ['user' => $user]);
    }
    

    public function update_mentor(Request $request,$id_user)
    {
      session()->start();
      $pass = Hash::make(request()->password);
      $preferences = DB::table('users')->where('id_user', $id_user)
      ->update([
        'id_user'=> request()->id_user,
        'name'=> request()->name,
        'username'=> request()->username,
        'password'=> $pass,
        'rolename'=> request()->rolename,
        'batch'=> request()->batch,
        'mentor'=> request()->mentor,
        'tgl_lahir'=> request()->tgl_lahir,
        'kota'=> request()->kota,
        'univ'=> request()->univ,
      ]);
      session()->flash('success', 'Data berhasil diupdate.');
      $user= DB::table('users')->get();
      return view('mentor.akun', ['user' => $user]);
    }

      



    public function hapus_mentor($id_user)
    {
        session()->start();
        $user = DB::table('users')->where('id_user', $id_user)->delete();
        $user = DB::table('users')->get();
        session()->flash('success', 'Data berhasil di hapus ☑️');
        return view('mentor.akun', ['user' => $user]);
        
    }
}
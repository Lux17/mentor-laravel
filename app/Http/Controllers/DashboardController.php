<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\Mobil;
use App\Http\Controllers\Dashboard;



class Dashboardcontroller extends Controller
{

    
    
    public function index()
    {
       
        $mobil = DB::table('mobil')->get();
        return view('admin.dashboard', ['mobil' => $mobil]);
    }

    public function simpan(Request $request)
    {
        $request->session()->regenerate();
        DB::table('mobil')->insert([
            'id' => $request->id,
            'nama' => $request->nama
        ]);
        return view('admin.dashboard');
    }

    public function update(Request $request,$id)
    {

      $preferences = DB::table('mobil')->where('id', $id)
        ->update([
        'id'=> request()->id,
        'nama'=> request()->nama,
        ]);

      return redirect()->route('dashboard');
    
    }

    public function hapus($id)
    {
        $mobil = DB::table('mobil')->where('id', $id)->delete();
        return redirect()->route('dashboard')
                         ->with('success', 'Data Mobil berhasil dihapus');
    }

}

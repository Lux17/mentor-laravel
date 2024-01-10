<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\Mobil;
use App\Http\Controllers\Learning;



class Learningcontroller extends Controller
{

    
    
    public function index()
    {
        session()->start();
        $learning = DB::table('learningpath')->get();
        return view('admin.learning', ['learning' => $learning]);
    }

    public function simpan(Request $request)
    {

        session()->start();

            DB::table('learningpath')->insert([
                'id_lern' => $request->id_lern,
                'kegiatan' => $request->kegiatan,
                'tgl_mulai' => $request->tgl_mulai,
                'tgl_selesai' => $request->tgl_selesai,
            ]);
            $learning = DB::table('learningpath')->get();
            session()->flash('success', 'Data berhasil disimpan.');
            return view('admin.learning', ['learning' => $learning]);
        
    }

    public function update(Request $request,$id_lern)
    {
      session()->start();


        $preferences = DB::table('learningpath')->where('id_lern', $id_lern)
      ->update([
        'kegiatan' => $request->kegiatan,
        'tgl_mulai' => $request->tgl_mulai,
        'tgl_selesai' => $request->tgl_selesai,
      ]);

      $learning = DB::table('learningpath')->get();
      session()->flash('success', 'Data berhasil diupdate.');
      return view('admin.learning', ['learning' => $learning]);
      
      
    }


    public function hapus($id_lern)
    {
        session()->start();
        $learning = DB::table('learningpath')->where('id_lern', $id_lern)->delete();
        $learning = DB::table('learningpath')->get();
        session()->flash('success', 'Data berhasil di hapus ☑️');
        return view('admin.learning', ['learning' => $learning]);
        
    }


    public function index_user()
    {
        session()->start();
        $learning = DB::table('learningpath')->get();
        return view('user.learning', ['learning' => $learning]);
    }
    public function index_mentor()
    {
        session()->start();
        $learning = DB::table('learningpath')->get();
        return view('mentor.learning', ['learning' => $learning]);
    }

}

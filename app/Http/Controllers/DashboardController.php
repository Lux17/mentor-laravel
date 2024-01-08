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
        session()->start();
        $mobil = DB::table('mobil')->get();
        return view('admin.dashboard', ['mobil' => $mobil]);
    }

    public function simpan(Request $request)
    {

        session()->start();
        if($request->hasFile('image')) { 
        $imageName = time().'.'.$request->image->extension();
        $uploadedImage = $request->image->move(public_path('images'), $imageName);
        $imagePath = 'images/' . $imageName;
        
        DB::table('mobil')->insert([
            'id' => $request->id,
            'nama' => $request->nama,
            'image' => $request->image = $imagePath
        ]);
        $mobil = DB::table('mobil')->get();
        return view('admin.dashboard', ['mobil' => $mobil]);
        }else{
            DB::table('mobil')->insert([
                'id' => $request->id,
                'nama' => $request->nama,

            ]);
            $mobil = DB::table('mobil')->get();
            return view('admin.dashboard', ['mobil' => $mobil]);
        }
    }

    public function update(Request $request,$id)
    {
      session()->start();

      if($request->hasFile('image')) { 
        $imageName = time().'.'.$request->image->extension();
        $uploadedImage = $request->image->move(public_path('images'), $imageName);
        $imagePath = 'images/' . $imageName;
        $preferences = DB::table('mobil')->where('id', $id)
          ->update([
          'id'=> request()->id,
          'nama'=> request()->nama,
          'image'=> request()->image = $imagePath
          ]);
  
          $mobil = DB::table('mobil')->get();
          return view('admin.dashboard', ['mobil' => $mobil]);
      }else {
        $preferences = DB::table('mobil')->where('id', $id)
      ->update([
      'id'=> request()->id,
      'nama'=> request()->nama
      ]);

      $mobil = DB::table('mobil')->get();
      return view('admin.dashboard', ['mobil' => $mobil]);
      }
      
    }


    public function hapus($id)
    {
        session()->start();
        $mobil = DB::table('mobil')->where('id', $id)->delete();
        $mobil = DB::table('mobil')->get();
        session()->flash('success', 'Data berhasil di hapus ☑️');
        return view('admin.dashboard', ['mobil' => $mobil]);
        
    }

}

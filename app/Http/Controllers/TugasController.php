<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\Tugas;






class TugasController extends Controller
{

    
    
    public function index()
    {
        session()->start();
        $tugas = DB::table('tugas')->get();
        return view('admin.tugas', ['tugass' => $tugas]);
    }

    public function simpan(Request $request)
    {

        session()->start();
        if($request->hasFile('images')) { 
        $imageName = time().'.'.$request->images->extension();
        $uploadedImage = $request->images->move(public_path('images'), $imageName);
        $imagePath = 'images/' . $imageName;
        
        DB::table('tugas')->insert([
            'id_tugas' => $request->id_tugas,
            'images' => $request->images = $imagePath,
            'tgl' => $request->tgl,
            'deskripsi'=> $request->deskripsi,
            'id_users' => $request->id_users,
            
        ]);
        $tugas = DB::table('tugas')->get();
        session()->flash('success', 'Data berhasil disimpan.');
        return view('admin.tugas', ['tugass' => $tugas]);
        }else{
            DB::table('tugas')->insert([
                'id_tugas' => $request->id_tugas,
                'tgl' => $request->tgl,
                'deskripsi'=> $request->deskripsi,
                'id_users' => $request->id_users,
            ]);
            $tugas = DB::table('tugas')->get();
            session()->flash('success', 'Data berhasil disimpan.');
            return view('admin.tugas', ['tugass' => $tugas]);
        }
    }

    public function update(Request $request,$id_tugas)
    {
      session()->start();

      if($request->hasFile('images')) { 
        $imageName = time().'.'.$request->images->extension();
        $uploadedImage = $request->images->move(public_path('images'), $imageName);
        $imagePath = 'images/' . $imageName;
        $preferences = DB::table('tugas')->where('id_tugas', $id_tugas)
          ->update([
          'images' => $request->images = $imagePath,
          'tgl' => $request->tgl,
          'deskripsi'=> $request->deskripsi,
          'id_users' => $request->id_users,
          ]);
  
          $tugas = DB::table('tugas')->get();
          session()->flash('success', 'Data berhasil diupdate.');
          return view('admin.tugas', ['tugass' => $tugas]);
      }else {
        $preferences = DB::table('tugas')->where('id_tugas', $id_tugas)
      ->update([
        'tgl' => $request->tgl,
        'deskripsi'=> $request->deskripsi,
        'id_users' => $request->id_users,
      ]);

      $tugas = DB::table('tugas')->get();
      session()->flash('success', 'Data berhasil diupdate.');
      return view('admin.tugas', ['tugass' => $tugas]);
      }
      
    }


    public function hapus($id_tugas)
    {
        session()->start();
        $tugas = DB::table('tugas')->where('id_tugas', $id_tugas)->delete();
        $tugas = DB::table('tugas')->get();
        session()->flash('success', 'Data berhasil di hapus ☑️');
        return view('admin.tugas', ['tugass' => $tugas]);
        
    }
    
    
    public function index_user()
    {
        session()->start();
        $tugas = DB::table('tugas')->get();
        return view('user.tugas', ['tugass' => $tugas]);
    }

    public function simpan_user(Request $request)
    {

        session()->start();
        if($request->hasFile('images')) { 
        $imageName = time().'.'.$request->images->extension();
        $uploadedImage = $request->images->move(public_path('images'), $imageName);
        $imagePath = 'images/' . $imageName;
        
        DB::table('tugas')->insert([
            'id_tugas' => $request->id_tugas,
            'images' => $request->images = $imagePath,
            'tgl' => $request->tgl,
            'deskripsi'=> $request->deskripsi,
            'id_users' => $request->id_users,
            
        ]);
        $tugas = DB::table('tugas')->get();
        session()->flash('success', 'Data berhasil disimpan.');
        return view('user.tugas', ['tugass' => $tugas]);
        }else{
            DB::table('tugas')->insert([
                'id_tugas' => $request->id_tugas,
                'tgl' => $request->tgl,
                'deskripsi'=> $request->deskripsi,
                'id_users' => $request->id_users,
            ]);
            $tugas = DB::table('tugas')->get();
            session()->flash('success', 'Data berhasil disimpan.');
            return view('user.tugas', ['tugass' => $tugas]);
        }
    }

    public function update_user(Request $request,$id_tugas)
    {
      session()->start();

      if($request->hasFile('images')) { 
        $imageName = time().'.'.$request->images->extension();
        $uploadedImage = $request->images->move(public_path('images'), $imageName);
        $imagePath = 'images/' . $imageName;
        $preferences = DB::table('tugas')->where('id_tugas', $id_tugas)
          ->update([
          'images' => $request->images = $imagePath,
          'tgl' => $request->tgl,
          'deskripsi'=> $request->deskripsi,
          'id_users' => $request->id_users,
          ]);
  
          $tugas = DB::table('tugas')->get();
          session()->flash('success', 'Data berhasil diupdate.');
          return view('user.tugas', ['tugass' => $tugas]);
      }else {
        $preferences = DB::table('tugas')->where('id_tugas', $id_tugas)
      ->update([
        'tgl' => $request->tgl,
        'deskripsi'=> $request->deskripsi,
        'id_users' => $request->id_users,
      ]);

      $tugas = DB::table('tugas')->get();
      session()->flash('success', 'Data berhasil diupdate.');
      return view('user.tugas', ['tugass' => $tugas]);
      }
      
    }


    public function hapus_user($id_tugas)
    {
        session()->start();
        $tugas = DB::table('tugas')->where('id_tugas', $id_tugas)->delete();
        $tugas = DB::table('tugas')->get();
        session()->flash('success', 'Data berhasil di hapus ☑️');
        return view('user.tugas', ['tugass' => $tugas]);
        
    }
    

    
    public function index_mentor()
    {
        session()->start();
        $tugas = DB::table('tugas')->get();
        return view('mentor.tugas', ['tugass' => $tugas]);
    }

    public function simpan_mentor(Request $request)
    {

        session()->start();
        if($request->hasFile('images')) { 
        $imageName = time().'.'.$request->images->extension();
        $uploadedImage = $request->images->move(public_path('images'), $imageName);
        $imagePath = 'images/' . $imageName;
        
        DB::table('tugas')->insert([
            'id_tugas' => $request->id_tugas,
            'images' => $request->images = $imagePath,
            'tgl' => $request->tgl,
            'deskripsi'=> $request->deskripsi,
            'id_users' => $request->id_users,
            
        ]);
        $tugas = DB::table('tugas')->get();
        session()->flash('success', 'Data berhasil disimpan.');
        return view('mentor.tugas', ['tugass' => $tugas]);
        }else{
            DB::table('tugas')->insert([
                'id_tugas' => $request->id_tugas,
                'tgl' => $request->tgl,
                'deskripsi'=> $request->deskripsi,
                'id_users' => $request->id_users,
            ]);
            $tugas = DB::table('tugas')->get();
            session()->flash('success', 'Data berhasil disimpan.');
            return view('mentor.tugas', ['tugass' => $tugas]);
        }
    }

    public function update_mentor(Request $request,$id_tugas)
    {
      session()->start();

      if($request->hasFile('images')) { 
        $imageName = time().'.'.$request->images->extension();
        $uploadedImage = $request->images->move(public_path('images'), $imageName);
        $imagePath = 'images/' . $imageName;
        $preferences = DB::table('tugas')->where('id_tugas', $id_tugas)
          ->update([
          'images' => $request->images = $imagePath,
          'tgl' => $request->tgl,
          'deskripsi'=> $request->deskripsi,
          'id_users' => $request->id_users,
          ]);
  
          $tugas = DB::table('tugas')->get();
          session()->flash('success', 'Data berhasil diupdate.');
          return view('mentor.tugas', ['tugass' => $tugas]);
      }else {
        $preferences = DB::table('tugas')->where('id_tugas', $id_tugas)
      ->update([
        'tgl' => $request->tgl,
        'deskripsi'=> $request->deskripsi,
        'id_users' => $request->id_users,
      ]);

      $tugas = DB::table('tugas')->get();
      session()->flash('success', 'Data berhasil diupdate.');
      return view('mentor.tugas', ['tugass' => $tugas]);
      }
      
    }


    public function hapus_mentor($id_tugas)
    {
        session()->start();
        $tugas = DB::table('tugas')->where('id_tugas', $id_tugas)->delete();
        $tugas = DB::table('tugas')->get();
        session()->flash('success', 'Data berhasil di hapus ☑️');
        return view('mentor.tugas', ['tugass' => $tugas]);
        
    }

}

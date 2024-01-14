<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\Tugas;
use Illuminate\Support\Facades\Storage;
use Response;
use File;






class TugasController extends Controller
{

    
    
    public function index()
    {
        session()->start();
        $tugas = DB::table('tugas')->get();
        $mente = DB::table('users')->where('rolename', 'mentee')->get();
        return view('admin.tugas', ['tugass' => $tugas, 'mente' => $mente]);
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
            'user' => $request->user,
            
        ]);
        $tugas = DB::table('tugas')->get();
        session()->flash('success', 'Data berhasil disimpan.');
        $mente = DB::table('users')->where('rolename', 'mentee')->get();
        return view('admin.tugas', ['tugass' => $tugas, 'mente' => $mente]);
        }else{
            DB::table('tugas')->insert([
                'id_tugas' => $request->id_tugas,
                'tgl' => $request->tgl,
                'deskripsi'=> $request->deskripsi,
                'user' => $request->user,
            ]);
            $tugas = DB::table('tugas')->get();
            session()->flash('success', 'Data berhasil disimpan.');
            $mente = DB::table('users')->where('rolename', 'mentee')->get();
            return view('admin.tugas', ['tugass' => $tugas, 'mente' => $mente]);
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
          'user' => $request->user,
          ]);
  
          $tugas = DB::table('tugas')->get();
          session()->flash('success', 'Data berhasil diupdate.');
          $mente = DB::table('users')->where('rolename', 'mentee')->get();
          return view('admin.tugas', ['tugass' => $tugas]);
      }else {
        $preferences = DB::table('tugas')->where('id_tugas', $id_tugas)
      ->update([
        'tgl' => $request->tgl,
        'deskripsi'=> $request->deskripsi,
        'user' => $request->user,
      ]);

      $tugas = DB::table('tugas')->get();
      session()->flash('success', 'Data berhasil diupdate.');
      $mente = DB::table('users')->where('rolename', 'mentee')->get();
      return view('admin.tugas', ['tugass' => $tugas, 'mente' => $mente]);
      }
      
    }


    public function hapus($id_tugas)
    {
        session()->start();
        $tugas = DB::table('tugas')->where('id_tugas', $id_tugas)->delete();
        $tugas = DB::table('tugas')->get();
        session()->flash('success', 'Data berhasil di hapus ☑️');
        $mente = DB::table('users')->where('rolename', 'mentee')->get();
        return view('admin.tugas', ['tugass' => $tugas, 'mente' => $mente]);
        
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
            'user' => $request->user,
            
        ]);
        $tugas = DB::table('tugas')->get();
        session()->flash('success', 'Data berhasil disimpan.');
        return view('user.tugas', ['tugass' => $tugas]);
        }else{
            DB::table('tugas')->insert([
                'id_tugas' => $request->id_tugas,
                'tgl' => $request->tgl,
                'deskripsi'=> $request->deskripsi,
                'user' => $request->user,
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
          'user' => $request->user,
          ]);
  
          $tugas = DB::table('tugas')->get();
          session()->flash('success', 'Data berhasil diupdate.');
          return view('user.tugas', ['tugass' => $tugas]);
      }else {
        $preferences = DB::table('tugas')->where('id_tugas', $id_tugas)
      ->update([
        'tgl' => $request->tgl,
        'deskripsi'=> $request->deskripsi,
        'user' => $request->user,
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
            'user' => $request->user,
            
        ]);
        $tugas = DB::table('tugas')->get();
        session()->flash('success', 'Data berhasil disimpan.');
        return view('mentor.tugas', ['tugass' => $tugas]);
        }else{
            DB::table('tugas')->insert([
                'id_tugas' => $request->id_tugas,
                'tgl' => $request->tgl,
                'deskripsi'=> $request->deskripsi,
                'user' => $request->user,
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
          'user' => $request->user,
          ]);
  
          $tugas = DB::table('tugas')->get();
          session()->flash('success', 'Data berhasil diupdate.');
          return view('mentor.tugas', ['tugass' => $tugas]);
      }else {
        $preferences = DB::table('tugas')->where('id_tugas', $id_tugas)
      ->update([
        'tgl' => $request->tgl,
        'deskripsi'=> $request->deskripsi,
        'user' => $request->user,
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

    public function downloadfoto(Image $image)
    {
      $file=Storage::disk('public')->get($image);
  
      return (new Response($file, 200))
            ->header('Content-Type', 'image/jpeg');
    }

}

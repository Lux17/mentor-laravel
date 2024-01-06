<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\Mobil;



class Dashboardcontroller extends Controller
{

    public function index()
    {
        $mobil = DB::table('mobil')->get();
        return view('admin.dashboard', ['mobil' => $mobil]);
    }

    public function simpan(Request $request)
    {
        DB::table('mobil')->insert([
            'id' => $request->id,
            'nama' => $request->nama
        ]);
        return view('admin.dashboard');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'namaMahasiswa'=>'required',
            'nimMahasiswa' => 'required',

            //'gambarMahasiswa' => 'required|image|mimes:jpg,png,jpeg'
        ]);
        $mobil = Mobil::find($id);
        $mobil->nama = $request->get('nama');
        $mobil->save();
        return redirect()->route('admin.dashboard')
                         ->with('success', 'Data berhasil diupdate');
    }


    public function destroy($id)
    {
        $mobil = Mobil::find($id);
        $mobil->delete();
        return redirect()->route('admin.dashboard')
                         ->with('success', 'Data Mobil berhasil dihapus');
    }

}

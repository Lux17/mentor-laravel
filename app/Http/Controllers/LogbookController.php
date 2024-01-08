<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;




class LogbookController extends Controller
{

    
    
    public function index()
    {

        session()->start();
        $logbook = DB::table('logbook')->get();
        return view('admin.logbook', ['logbook' => $logbook]);
    }

    
    public function simpan(Request $request)
    {

        session()->start();

            DB::table('logbook')->insert([
                'id_log'=> request()->id_log,
                'aktifitas'=> request()->aktifitas,
                'emosi'=> request()->emosi,
                'id_users'=> request()->id_users

            ]);
            $logbook = DB::table('logbook')->get();
            return view('admin.logbook', ['logbook' => $logbook]);
    }
    

    public function update(Request $request,$id_log)
    {
      session()->start();
      $preferences = DB::table('logbook')->where('id_log', $id_log)
      ->update([
      'id_log'=> request()->id_log,
      'aktifitas'=> request()->aktifitas,
      'emosi'=> request()->emosi,
      'id_users'=> request()->id_users
      ]);

      $logbook= DB::table('logbook')->get();
      return view('admin.logbook', ['logbook' => $logbook]);
    }

      



    public function hapus($id_log)
    {
        session()->start();
        $logbook = DB::table('logbook')->where('id_log', $id_log)->delete();
        $logbook = DB::table('logbook')->get();
        session()->flash('success', 'Your record has been deleted ☑️');
        return view('admin.logbook', ['logbook' => $logbook]);
        
    }
}
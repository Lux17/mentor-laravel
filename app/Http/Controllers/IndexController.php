<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        return view('index');
    }

    public function bot(Request $request){
        dd($request);
        $message = $request->messageValue;
        $pdo=DB::connection()->getPdo()->quote($message);
        $bot = DB::table('bot')->where('messages','=', $pdo)->get();
        $hitung = DB::table('bot')->where('messages','=', $pdo)->count();

        if($hitung > 0){

            $result = mysqli_fetch_assoc($bot);
            echo $result['response'];
        }else{

        // Otherwise, echo this message
        echo "Sorry, I can't understand you.";
        }
        return view('index', ['bot' => $bot]);
    }
}

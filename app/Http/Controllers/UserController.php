<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;


class Dashboardcontroller extends Controller
{
    public function show()
    {
        return view('admin/dashboard');
    }
}

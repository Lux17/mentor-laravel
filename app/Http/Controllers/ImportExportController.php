<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//IMPORT EXPORT
use App\Exports\ExportMobil;
use App\Imports\ImportMobil;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Mobil;

class ImportExportController extends Controller
{
    public function importExport()
    {
       return view('importmobil');
    }
    public function export() 
    {
        return Excel::download(new ExportMobil, 'users.xlsx');
    }
    public function import() 
    {
        Excel::import(new ImportMobil, request()->file('file'));
            
        return back();
    }
}

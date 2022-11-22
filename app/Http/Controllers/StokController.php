<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Imports\StokACRSImport;
use App\Models\StokExcel;
use Maatwebsite\Excel\Facades\Excel;

class StokController extends Controller
{
    public function getImportForm(){
        return view('listStok/importData');
    }

    public function prosesImport(Request $request){
        Excel::import(new StokACRSImport, $request->file('file')->store('temp'));
        return redirect('/');
    }

    public function showAllData(){
        $proses = StokExcel::paginate(10);
        return view('listStok/showData', compact('proses'));
    }
}

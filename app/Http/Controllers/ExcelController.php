<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ACRSImport;
use App\Imports\ACRSImport2;
use App\Models\Excel_Data;
//use Excel;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function getFormAddData(){
        return view('formAddData');
    }

    public function importData(Request $request){
        Excel::import(new ACRSImport, $request->file('file')->store('temp'));
        return redirect('/');
    }

    public function showData(){
        $data = Excel_Data::paginate(20);
        return view('showData',compact('data'));
    }
}

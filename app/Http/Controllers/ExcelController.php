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

    public function dashboard(){
        $dataMotor = Excel_Data::select('Nama_Barang')->groupBy('Nama_Barang')->get()->count();
        $dataKeseluruhan = Excel_Data::select('Nomor_FJ')->count();
        $dataSales = Excel_Data::select('Nama_Sales')->groupBy('Nama_Sales')->get()->count();
        $dataFinance = Excel_Data::select('Nama_Customer_Biaya')->where('Jenis_Bayar', '=', 'Kredit Lembaga Pembiayaan')->groupBy('Nama_Customer_Biaya')
            ->get()->count();


        return view('dashboard')->with('dataMotor', $dataMotor)->with('dataSales', $dataSales)
            ->with('dataFinance', $dataFinance)->with('dataSeluruh', $dataKeseluruhan);
    }

    public function importData(Request $request){
        Excel::import(new ACRSImport, $request->file('file')->store('temp'));
        return redirect('/');
    }

    public function showData(){
        $data = Excel_Data::paginate(20);
        return view('showData',compact('data'));
    }

    public function aboutUs(){
        return view('contact');
    }
}

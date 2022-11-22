<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ACRSImport;
use App\Imports\ACRSImport2;
use App\Models\Excel_Data;
use App\Models\StokExcel;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

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
        $dataStok = StokExcel::select('No_SPB')->count();


        return view('dashboard')->with('dataMotor', $dataMotor)->with('dataSales', $dataSales)
            ->with('dataFinance', $dataFinance)->with('dataSeluruh', $dataKeseluruhan)->with('dataStok', $dataStok);
    }

    public function importData(Request $request){
        Excel::import(new ACRSImport, $request->file('file')->store('temp'));
        return redirect('/');
    }

    public function showData(){
        $data = Excel_Data::paginate(20);
        return view('showData',compact('data'));
    }

    public function getFormTransactionDataByDate(){
        return view('listTransaction/pickData');
    }

    public function showDatabyDate(Request $request){
        $dataAwal = Carbon::createFromFormat('Y-m-d H:i:s', $request->date('dataAwal'))->startOfDay();
        $dataAkhir = Carbon::createFromFormat('Y-m-d H:i:s', $request->date('dataAkhir'))->endOfDay();

        $prosesData = Excel_Data::whereBetween('Tanggal_FJ', [$dataAwal, $dataAkhir])->get();

        return view('listTransaction/hasilDataAllByDate', compact('prosesData'))->with('awal', $dataAwal)->with('akhir', $dataAkhir);
    }

    public function aboutUs(){
        return view('contact');
    }
}


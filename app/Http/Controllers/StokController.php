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

    public function getDateForm(){
        return view('listStok/pickData');
    }

    public function prosesImport(Request $request){
        Excel::import(new StokACRSImport, $request->file('file')->store('temp'));
        return redirect('/');
    }

    public function showAllData(){
        $proses = StokExcel::paginate(10);
        return view('listStok/showData', compact('proses'));
    }

    public function getStokByDate(Request $request){
        $dataAwal = Carbon::createFromFormat('Y-m-d H:i:s', $request->date('dataAwal'))->startOfDay();
        $dataAkhir = Carbon::createFromFormat('Y-m-d H:i:s', $request->date('dataAkhir'))->endOfDay();

        $prosesData = StokExcel::selectRaw('count(Nama_Brg) as countSPM, Nama_Brg as namaBarang')
            ->whereBetween('Tgl_LPB', [$dataAwal, $dataAkhir])->groupby('Nama_Brg')->get();

        $prosesDataArray = [];

        foreach($prosesData as $rows){
            $prosesDataArray['label'][] = $rows->namaBarang;
            $prosesDataArray['jumlah'][] = (int) $rows->countSPM;
        }

        $prosesDataArray['chartData'] = json_encode($prosesDataArray);

        return view('listStok/hasilData', $prosesDataArray)->with('awal', $dataAwal)->with('akhir', $dataAkhir);
    }

    public function getStatistikStok(){
        $getData = StokExcel::selectRaw('count(Tgl_LPB) as countTanggal, Tgl_LPB as tanggal')
            ->groupBy('Tgl_LPB')->get();

        return view('dashboard', compact('getData'));

    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Imports\StokACRSImport;
use App\Models\StokExcel;
use App\Models\Excel_Data;
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

    public function getSisaStok(Request $request){
        $query1 = StokExcel::selectRaw('Nama_Warna as Warna, Kode_Mtr as Kode, Nama_Brg as nama, count(substr(Nama_Brg,0,15)) as count')
            ->groupBy(['Kode', 'nama', 'Nama_Warna'])->get();

        $query2 = Excel_Data::selectRaw('Warna, Spesifikasi_Lain as Kode, Nama_Barang as nama, count(Spesifikasi_Lain) as count')
            ->groupby(['Kode', 'nama', 'Warna'])->get();

        if($query1 == $query2){
            $hasil = $query1 - $query2;
        }else{
            $hasil = $query1;
        }

        return view('test', compact('hasil'));

    }




}

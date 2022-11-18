<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Excel_Data;
use Carbon\Carbon; 

class listSalesPerformannce extends Controller
{
    public function getFormTanggal(){
        return view("salesPerformance/pickData");
    }

    public function prosesTanggal(Request $request){
        $awal = Carbon::createFromFormat('Y-m-d H:i:s', $request->date('dataAwal'))->startOfDay();
        $akhir = Carbon::createFromFormat('Y-m-d H:i:s', $request->date('dataAkhir'))->endOfDay();

        $proses = Excel_Data::selectRaw('count(Nama_Sales) as count, Nama_Sales as nama')
            ->whereBetween('Tanggal_FJ', [$awal, $akhir])->groupBy('Nama_Sales')->get();

        $chartData = [];

        foreach($proses as $row){
            $chartData['label'][] = $row->nama;
            $chartData['jumlah'][] = (int) $row->count;
        }

        $chartData['chart_data'] = json_encode($chartData);
        return view('salesPerformance/hasilData', $chartData)
            ->with('awal', $awal)
            ->with('akhir', $akhir);
    }

    public function getSeluruhData(){
        $getData = Excel_Data::selectRaw('count(Nama_Barang) as countData, Nama_Sales as namaSales')
            ->groupBy('Nama_Sales')->get();

        $chartTotal = [];

        foreach($getData as $barisData){
            $chartTotal['label'][] = $barisData->namaSales;
            $chartTotal['count'][] = (int) $barisData->countData;
        }

        $chartTotal['chartTotal'] = json_encode($chartTotal);
        return view('salesPerformance/grafik', $chartTotal);
    }
}

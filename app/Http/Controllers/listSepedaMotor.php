<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Excel_Data;
use Carbon\Carbon;

class listSepedaMotor extends Controller
{
    public function getFormTanggal(){
        return view("listSepedaMotor/formPickData");
    }

    public function prosesTanggal(Request $request){
        $awal = Carbon::createFromFormat('Y-m-d H:i:s', $request->date('dataAwal'))->startOfDay();
        $akhir = Carbon::createFromFormat('Y-m-d H:i:s', $request->date('dataAkhir'))->endOfDay();

        $proses = Excel_Data::selectRaw('count(Nama_Barang) as count, Nama_Barang as nama')
            ->whereBetween('Tanggal_FJ', [$awal, $akhir])->groupBy('Nama_Barang')->get();

        $chartData = [];

        foreach($proses as $row){
            $chartData['label'][] = $row->nama;
            $chartData['jumlah'][] = (int) $row->count;
        }

        $chartData['chart_data'] = json_encode($chartData);
        return view('listSepedaMotor/hasilData', $chartData)
            ->with('awal', $awal)
            ->with('akhir', $akhir);
    }
}

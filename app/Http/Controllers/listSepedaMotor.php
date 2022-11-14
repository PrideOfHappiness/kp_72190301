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

        $proses = Excel_Data::whereBetween(
            'Tanggal_FJ', [$awal, $akhir])->get()->groupBy('Nama_Barang')->sortBy('Nama_Barang');

        return view('listSepedaMotor/hasilData', compact('proses'))->with('awal', $awal)->with('akhir', $akhir);
    }
}   

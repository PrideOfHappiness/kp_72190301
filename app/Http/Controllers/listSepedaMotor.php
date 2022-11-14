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

        $proses = Excel_Data::select('Nama_Barang as nama, count(nama_barang) as count')
            ->whereBetween('Tanggal_FJ', [$awal, $akhir])->groupBy('Nama_Barang')->get();

        $data = [];
        foreach ($proses as $row){
            $data['label'][] = $row->nama;
            $data['jumlah'][] = (int) $row->count;
        }

        $data['data_chart'] = json_encode($data);
        return view('listSepedaMotor/hasilData', $data)->with('awal', $awal)->with('akhir', $akhir);
    }
}   

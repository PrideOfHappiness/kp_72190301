<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Excel_Data;
use Carbon\Carbon;

class listLokasi extends Controller
{
    public function getForm(){
        return view('listLokasi/pickData');
    }

    public function getFormKecamatan(){
        return view('listLokasi/pickDataKecamatan');
    }

    public function proses(Request $request){
        $awal = Carbon::createFromFormat('Y-m-d H:i:s', $request->date('dataAwal'))->startOfDay();
        $akhir = Carbon::createFromFormat('Y-m-d H:i:s', $request->date('dataAkhir'))->endOfDay();

        $proses = Excel_Data::selectRaw('count(Nama_Wilayah) as count, Nama_Wilayah as wilayah')
            ->whereBetween('Tanggal_FJ', [$awal, $akhir])->groupBy('Nama_Wilayah')->get();

        $chartData = [];

        foreach($proses as $row){
            $chartData['label'][] = $row->wilayah;
            $chartData['jumlah'][] = (int) $row->count;
        }

        $chartData['chart_data'] = json_encode($chartData);
        return view('listLokasi/hasilDataKota', $chartData)
            ->with('awal', $awal)
            ->with('akhir', $akhir);
    }

    public function getLokasiByKecamatan(Request $request) {
        $awal = Carbon::createFromFormat('Y-m-d H:i:s', $request->date('dataAwal'))->startOfDay();
        $akhir = Carbon::createFromFormat('Y-m-d H:i:s', $request->date('dataAkhir'))->endOfDay();

        $proses  = Excel_Data::selectRaw('count(Kecamatan) as count, Kecamatan as kecamatan')
            ->whereBetween('Tanggal_FJ', [$awal, $akhir])->groupBy('Kecamatan')->get();

            $chartData = [];

            foreach($proses as $row){
                $chartData['label'][] = $row->kecamatan;
                $chartData['jumlah'][] = (int) $row->count;
            }

            $chartData['chart_data'] = json_encode($chartData);
            return view('listLokasi/hasilDataKecamatan', $chartData)
                ->with('awal', $awal)
                ->with('akhir', $akhir);

    }
}

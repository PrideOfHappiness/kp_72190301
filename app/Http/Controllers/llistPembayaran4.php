<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Excel_Data;
use Carbon\Carbon;

class llistPembayaran4 extends Controller
{
    public function getFormTanggal(){
        return view("listPembayaran/pickData");
    }

    public function prosesTanggal(Request $request){
        $awal = Carbon::createFromFormat('Y-m-d H:i:s', $request->date('dataAwal'))->startOfDay();
        $akhir = Carbon::createFromFormat('Y-m-d H:i:s', $request->date('dataAkhir'))->endOfDay();

        //SQL Query untuk ringkasan secara umum (Tunai & Kredit Dealer digabung --> Belum pasti)
        //SQL Query utk Pembayaran per Moda Transaksi
        $subPembayaran = Excel_Data::selectRaw('count(Jenis_Bayar) as count, Jenis_Bayar as nama')
            ->whereBetween('Tanggal_FJ', [$awal, $akhir])->groupBy('Jenis_Bayar')->get();

        $chartData = [];

        foreach($subPembayaran as $row){
            $chartData['label'][] = $row->nama;
            $chartData['jumlah'][] = (int) $row->count;
        }

        $chartData['chart_data'] = json_encode($chartData);
        return view('listPembayaran/hasilData', $chartData)
            ->with('awal', $awal)
            ->with('akhir', $akhir);
    }
}

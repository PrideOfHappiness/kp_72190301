<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Excel_Data;
use Carbon\Carbon;

class TransactionController extends Controller
{
    public function getForm(){
        return view('listTransaction/pickDataGrafik');
    }

    public function getAllTransactionData(){
        $dataAll = Excel_Data::selectRaw('count(Tanggal_FJ) as countTransaction, Tanggal_FJ as tanggal')
            ->groupBy('Tanggal_FJ')->get();

        $chartData = [];

        foreach($dataAll as $data){
            $chartData['label'][] = $data->tanggal;
            $chartData['jumlah'][] = $data->countTransaction;
        }

        $chartData['totalNonDate'] = json_encode($chartData); 

        return view('listTransaction/HasilDataGrafikAll', $chartData)
            ->with('awal', $awal)
            ->with('akhir', $akhir);
    

    }

    public function getDateTransactionData(Request $request){
        $awal = Carbon::createFromFormat('Y-m-d H:i:s', $request->date('dataAwal'))->startOfDay();
        $akhir = Carbon::createFromFormat('Y-m-d H:i:s', $request->date('dataAkhir'))->endOfDay();

        $dataDate = Excel_Data::selectRaw('count(Tanggal_FJ) as countTransaction, Tanggal_FJ as tanggal')
            ->whereBetween('Tanggal_FJ', [$awal, $akhir])->groupBy('Tanggal_FJ')->get();

        $chartData = [];

        foreach($dataDate as $data){
            $chartData['label'][] = $data->tanggal;
            $chartData['jumlah'][] = $data->countTransaction;
        }

        $chartData['total'] = json_encode($chartData);

        return view('listTransaction/HasilDataGrafik', $chartData)
            ->with('awal', $awal)
            ->with('akhir', $akhir);
    }
}

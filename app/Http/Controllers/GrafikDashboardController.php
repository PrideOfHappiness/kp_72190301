<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Excel_Data;

class GrafikDashboardController extends Controller
{
    public function getSepedaMotor(){
        $getData = Excel_Data::selectRaw('count(Nama_Barang) as countData, Nama_Barang as namaBarang')
            ->groupBy('Nama_Barang')->get();

        $chartTotal = [];

        foreach($getData as $barisData){
            $chartTotal['label'][] = $barisData->namaBarang;
            $chartTotal['count'][] = (int) $barisData->countData;
        }

        $chartTotal['chartTotal'] = json_encode($chartTotal);
        return view('dashboard', $chartTotal);
    }

    public function getSales(){

    }
}


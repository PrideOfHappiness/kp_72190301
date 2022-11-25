<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Excel_Data;

class DashboardChartController extends Controller
{
    public function getSPMData(){
        $dataPenjualan = Excel_Data::selectRaw('count(Nama_Barang) as count')
            ->whereTear('');
    }
}

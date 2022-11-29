<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;
use App\Models\MapsKabKota;

class MapController extends Controller
{
    public function getLatLngKabKota(){
        $result = Map::all();
        return view('listLokasi/hasilDataKota', compact('result'));
    }

    public function getLatLngKabKotaInfo(){
        $info = Map::all();
        return view('listLokasi/hasilDataKota', compact('info'));
    }
}

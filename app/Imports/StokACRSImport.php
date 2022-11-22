<?php

namespace App\Imports;

use App\Models\StokExcel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Carbon\Carbon;

class StokACRSImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $count = StokExcel::where('No_SPB',$row[8])->count();
        if($count > 0){
            return null;
        }
        return new StokExcel([
            'Kode_Div' => $row[0],
            'Kode_Gdg' => $row[1],
            'Kode_Brg' => $row[2],
            'Nama_Brg' => $row[3],
            'No_Mesin'=> $row[4],
            'No_Rangka'=> $row[5],
            'No_Stok'=> $row[6],
            'Nama_Warna'=> $row[7],
            'No_SPB'=> $row[8],
            'Tgl_SPB' =>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[9]),
            'No_LPB'=> $row[10],
            'Tgl_LPB'=>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[11]),
            'Nilai_Rp'=> $row[12],
        ]);
    }
}

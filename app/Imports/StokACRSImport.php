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
            'Kode_Mtr' => $row[3],
            'Nama_Brg' => $row[4],
            'No_Mesin'=> $row[5],
            'No_Rangka'=> $row[6],
            'No_Stok'=> $row[7],
            'Nama_Warna'=> $row[8],
            'No_SPB'=> $row[9],
            'Tgl_SPB' =>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[10]),
            'No_LPB'=> $row[11],
            'Tgl_LPB'=>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[12]),
            'Nilai_Rp'=> $row[13],
        ]);
    }
}

<?php

namespace App\Imports;

use App\Models\Excel_Data;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Carbon\Carbon;

class ACRSImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        $count = Excel_Data::where('Nomor_FJ',$row[1])->count();
        if($count > 0){
            return null;
        }
        return new Excel_Data([
            'Tanggal_FJ' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[0]),
            'Nomor_FJ' => $row[1],
            'Gudang' => $row[2],
            'Nomor_Mesin' => $row[3],
            'Nomor_Rangka' => $row[4],
            'Tahun' => $row[5],
            'Warna' => $row[6],
            'Nama_Barang' => $row[7],
            'Spesifikasi_Lain' => $row[8],
            'Jenis_Bayar' => $row[9],
            'Kode_Customer' => $row[10],
            'Kode_Wilayah' => $row[11],
            'Nama_Wilayah' => $row[12],
            'Nama_Customer' => $row[13],
            'Alamat_Customer' => $row[14],
            'Nomor_KTP_Customer' => $row[15],
            'Nomor_Telepon' => $row[16],
            'Kode_Customer_Biaya' => $row[17],
            'Nama_Customer_Biaya' => $row[18],
            'Nama_BPKB_STNK' => $row[19],
            'Alamat_BPKB_STNK' => $row[20],
            'Nomor_KTP_BPKB_STNK' => $row[21],
            'Nama_Sales' => $row[22],
            'Divisi' => $row[23],
            'Nama_Broker' => $row[24],
            'Kecamatan' => $row[25],
            ]);
}
}



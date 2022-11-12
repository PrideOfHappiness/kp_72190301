<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Models\Excel_Data;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;

class ACRSImport2 implements ToCollection
{
    /**
    * @param Collection $collection
    */
    use Importable, SkipsOnFailures;

    public function collection(Collection $collection)
    {
        Validator::make($collection->toArray(), [
            '*.Tanggal_FJ' => 'required|date',
            '*.Nomor_FJ' => 'required|string',
            '*.Gudang' => 'required|string',
            '*.No_Mesin' => 'required|string',
            '*.No_Rangka' => 'required|string',
            '*.Tahun' => 'required|string',
            '*.Warna' => 'required|string',
            '*.Nama_Barang' => 'required|string',
            '*.Spesifikasi_Lain' => 'required|string',
            '*.Jenis_Bayar' =>'required|string',
            '*.Kode_Customer' => 'required|string',
            '*.Kode_Wilayah' => 'required|string',
            '*.Nama_Wilayah' => 'required|string',
            '*.Nama_Customer' => 'required|string',
            '*.Alamat_Customer' => 'required|text',
            '*.Nomor_KTP_Customer' => 'required|string',
            '*.Nomor_Telepon' => 'required|string',
            '*.Kode_Customer_Biaya' =>'required|string',
            '*.Nama_Customer_Biaya' => 'required|string',
            '*.Nama_BPKB_STNK' => 'required|string',
            '*.Alamat_BPKB_STNK' =>'required|string',
            '*.Nomor_KTP_BPKB_STNK' => 'required|string',
            '*.Nama_Sales' => 'required|string',
            '*.Divisi' => 'required|string',
            '*.Nama_Broker' =>'required|string',
            '*.Kecamatan' => 'required|string',
        ])->validate();

            foreach($collection as $row){
                $count = Excel_Data::where('Nomor_FJ',$row['Nomor_FJ'])->count();

                if($count > 0){
                    continue;
                }
                Excel_Data::create([
                    'Tanggal_FJ' => $row['Tanggal_FJ'],
                    'Nomor_FJ' => $row['Nomor_FJ'],
                    'Gudang' => $row['Gudang'],
                    'No_Mesin' => $row['No_Mesin'],
                    'No_Rangka' => $row['No_Rangka'],
                    'Tahun' => $row['Tahun'],
                    'Warna' => $row['Warna'],
                    'Nama_Barang' => $row['Nama_Barang'],
                    'Spesifikasi_Lain' => $row['Spesifikasi_Lain'],
                    'Jenis_Bayar' => $row['Jenis_Bayar'],
                    'Kode_Customer' => $row['Kode_Customer'],
                    'Kode_Wilayah' => $row['Kode_Wilayah'],
                    'Nama_Wilayah' => $row['Nama_Wilayah'],
                    'Nama_Customer' => $row['Nama_Customer'],
                    'Alamat_Customer' => $row['Alamat_Customer'],
                    'Nomor_KTP_Customer' => $row['Nomor_KTP_Customer'],
                    'Nomor_Telepon' => $row['Nomor_Telepon'],
                    'Kode_Customer_Biaya' => $row['Kode_Customer_Biaya'],
                    'Nama_Customer_Biaya' => $row['Nama_Customer_Biaya'],
                    'Nama_BPKB_STNK' => $row['Nama_BPKB_STNK'],
                    'Alamat_BPKB_STNK' => $row['Alamat_BPKB_STNK'],
                    'Nomor_KTP_BPKB_STNK' => $row['Nomor_KTP_BPKB_STNK'],
                    'Nama_Sales' => $row['Nama_Sales'],
                    'Divisi' => $row['Divisi'],
                    'Nama_Broker' => $row['Nama_Broker'],
                    'Kecamatan' => $row['Kecamatan'],
                ]);
                }
        }
        public function headingRow():int {
            return 1;
        }
    }



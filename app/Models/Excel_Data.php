<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Excel_Data extends Model
{
    use HasFactory;

    protected $table='excel_data';
    protected $dates = ['Tanggal_FJ'];
    protected $guarded = [];

    protected $fillable=[
        'Tanggal_FJ',
        'Nomor_FJ',
        'Gudang',
        'Nomor_Mesin',
        'Nomor_Rangka',
        'Tahun',
        'Warna',
        'Nama_Barang',
        'Spesifikasi_Lain',
        'Jenis_Bayar',
        'Kode_Customer',
        'Kode_Wilayah',
        'Nama_Wilayah',
        'Nama_Customer',
        'Alamat_Customer',
        'Nomor_KTP_Customer',
        'Nomor_Telepon',
        'Kode_Customer_Biaya',
        'Nama_Customer_Biaya',
        'Nama_BPKB_STNK',
        'Alamat_BPKB_STNK',
        'Nomor_KTP_BPKB_STNK',
        'Nama_Sales',
        'Divisi',
        'Nama_Broker',
        'Kecamatan',
    ];

}

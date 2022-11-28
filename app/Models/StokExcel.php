<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokExcel extends Model
{
    use HasFactory;

    protected $table = 'stok';
    protected $dates = ['Tgl_LPB', 'Tgl_SPB'];

    protected $fillable = [
        'Kode_Div',
        'Kode_Gdg',
        'Kode_Brg',
        'Kode_Mtr',
        'Nama_Brg',
        'No_Mesin',
        'No_Rangka',
        'No_Stok',
        'Nama_Warna',
        'No_SPB',
        'Tgl_SPB',
        'No_LPB',
        'Tgl_LPB',
        'Nilai_Rp',
    ];
}

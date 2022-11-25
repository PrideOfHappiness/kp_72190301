<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excel_data', function (Blueprint $table) {
            $table->id();
            $table->date('Tanggal_FJ');
            $table->string('Nomor_FJ')->nullable();
            $table->string('Gudang')->nullable();
            $table->string('Nomor_Mesin');
            $table->string('Nomor_Rangka');
            $table->string('Tahun');
            $table->string('Warna');
            $table->string('Nama_Barang');
            $table->string('Spesifikasi_Lain');
            $table->string('Jenis_Bayar');
            $table->string('Kode_Customer');
            $table->string('Kode_Wilayah')->nullable();
            $table->string('Nama_Wilayah')->nullable();
            $table->string('Nama_Customer');
            $table->string('Alamat_Customer')->nullable();
            $table->string('Nomor_KTP_Customer')->nullable();
            $table->string('Nomor_Telepon')->nullable();
            $table->string('Kode_Customer_Biaya');
            $table->string('Nama_Customer_Biaya');
            $table->string('Nama_BPKB_STNK');
            $table->string('Alamat_BPKB_STNK')->nullable();
            $table->string('Nomor_KTP_BPKB_STNK');
            $table->string('Nama_Sales');
            $table->string('Divisi');
            $table->string('Nama_Broker')->nullable();
            $table->string('Kecamatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('excel_data');
    }
};

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
        Schema::create('stok', function (Blueprint $table) {
            $table->id();
            $table->string('Kode_Div');
            $table->string('Kode_Gdg');
            $table->string('Kode_Brg');
            $table->string('Kode_Mtr');
            $table->string('Nama_Brg')->nullable();
            $table->string('No_Mesin');
            $table->string('No_Rangka');
            $table->string('No_Stok');
            $table->string('Nama_Warna');
            $table->string('No_SPB');
            $table->string('Tgl_SPB');
            $table->string('No_LPB');
            $table->date('Tgl_LPB');
            $table->integer('Nilai_Rp');
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
        Schema::dropIfExists('stok');
    }
};

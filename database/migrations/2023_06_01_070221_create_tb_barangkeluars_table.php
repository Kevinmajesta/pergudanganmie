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
        Schema::create('tb_barangkeluars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_gudang');
            $table->foreign('id_gudang')->references('id')->on('tb_gudangs');
            $table->unsignedBigInteger('id_produk');
            $table->foreign('id_produk')->references('id')->on('tb_produks');
            $table->integer('jml_keluar');
            $table->date('tanggal');
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
        Schema::dropIfExists('tb_barangkeluars');
    }
};

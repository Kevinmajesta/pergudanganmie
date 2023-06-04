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
        Schema::create('tb_pengiriman', function (Blueprint $table) {
            $table->id();
            $table->string('id_pengiriman');
            $table->unsignedBigInteger('id_resi');
            $table->foreign('id_resi')->references('id')->on('tb_ekspedisis');
            $table->unsignedBigInteger('id_supir');
            $table->foreign('id_supir')->references('id')->on('tb_supirs');
            $table->string('namasupir');
            $table->unsignedBigInteger('id_transaksi');
            $table->foreign('id_transaksi')->references('id')->on('tb_pembayarans');
            $table->string('kendaraan');
            $table->string('statuspengiriman');
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
        Schema::dropIfExists('tb_pengiriman');
    }
};

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
        Schema::create('tb_ekspedisis', function (Blueprint $table) {
            $table->id();
            $table->string('id_resi');
            $table->unsignedBigInteger('id_transaksi');
            $table->foreign('id_transaksi')->references('id')->on('tb_pembayarans');
            $table->datetime('tanggal');
            $table->unsignedBigInteger('id_rute');
            $table->foreign('id_rute')->references('id')->on('tb_rutes');
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
        Schema::dropIfExists('tb_ekspedisis');
    }
};

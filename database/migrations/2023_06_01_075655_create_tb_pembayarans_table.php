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
        Schema::create('tb_pembayarans', function (Blueprint $table) {
            $table->id();
            $table->string('id_transaksi');
            $table->date('tgl_bayar');
            $table->integer('total_bayar');
            $table->unsignedBigInteger('id_produk');
            $table->foreign('id_produk')->references('id')->on('tb_produks');
            $table->string('jumlahbarang');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('tb_users');

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
        Schema::dropIfExists('tb_pembayarans');
    }
};

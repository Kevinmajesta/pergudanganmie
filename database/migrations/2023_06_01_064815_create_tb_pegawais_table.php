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
        Schema::create('tb_pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('id_pegawai');
            $table->string('namapegawai');
            $table->date('tgl_masuk');
            $table->unsignedBigInteger('id_gudang');
            $table->foreign('id_gudang')->references('id')->on('tb_gudangs');
            $table->string('alamat');
            $table->string('nohp');
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
        Schema::dropIfExists('tb_pegawais');
    }
};

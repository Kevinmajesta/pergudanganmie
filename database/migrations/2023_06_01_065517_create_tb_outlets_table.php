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
        Schema::create('tb_outlets', function (Blueprint $table) {
            $table->id();
            $table->string('id_outlet');
            $table->unsignedBigInteger('id_pegawai');
            $table->foreign('id_pegawai')->references('id')->on('tb_pegawais');
            $table->string('alamatoutlet');
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
        Schema::dropIfExists('tb_outlets');
    }
};

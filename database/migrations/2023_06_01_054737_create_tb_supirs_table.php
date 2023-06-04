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
        Schema::create('tb_supirs', function (Blueprint $table) {
            $table->id();
            $table->string('id_supir');
            $table->string('kendaraan');
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->string('nohp');
            $table->string('nama');
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
        Schema::dropIfExists('tb_supirs');
    }
};

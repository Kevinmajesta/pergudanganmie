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
        Schema::create('tb_rutes', function (Blueprint $table) {
            $table->id();
            $table->string('id_rute');
            $table->unsignedBigInteger('id_supir');
            $table->foreign('id_supir')->references('id')->on('tb_supirs');
            $table->string('waktutempuh');
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
        Schema::dropIfExists('tb_rutes');
    }
};

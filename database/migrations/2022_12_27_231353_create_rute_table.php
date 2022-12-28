<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rute', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_bus');
            $table->unsignedBigInteger('id_pemberangkatan');
            $table->unsignedBigInteger('id_pemberhentian');
            $table->time('jam_berangkat', $precision = 0);
            $table->time('jam_sampai', $precision = 0);
            $table->time('jam_transit', $precision = 0);
            $table->foreign('id_bus')->references('id')->on('bus')->onDelete('cascade');
            $table->foreign('id_pemberangkatan')->references('id')->on('lokasi')->onDelete('cascade');
            $table->foreign('id_pemberhentian')->references('id')->on('lokasi')->onDelete('cascade');
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
        Schema::dropIfExists('rute');
    }
}

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
        Schema::create('SuatChieu', function (Blueprint $table) {
            $table->increments('id');
            $table->time('gioBatDau', $precision=0);
            $table->time('gioKetThhuc', $precision=0);
            $table->date('ngayChieu');
            $table->integer('id_phongChieu')->unsigned();
            $table->integer('id_phim')->unsigned();
            $table->foreign('id_phongChieu')->references('id')->on('PhongChieu')->onUpdate('cascade');
            $table->foreign('id_phim')->references('id')->on('Phim')->onUpdate('cascade');
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
        Schema::dropIfExists('SuatChieu');
    }
};

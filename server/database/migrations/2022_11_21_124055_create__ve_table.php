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
        Schema::create('Ve', function (Blueprint $table) {
            $table->id();
            $table->dateTime('ngayBan',$precision=0);
            $table->integer('thanhTien')->default(0);
            $table->integer('id_suatChieu')->unsigned();
            $table->integer('id_ghe')->unsigned();
            $table->integer('id_khachHang')->unsigned();
            $table->foreign('id_suatChieu')->references('id')->on('SuatChieu')->onUpdate('cascade');
            $table->foreign('id_ghe')->references('id')->on('Ghe')->onUpdate('cascade');
            $table->foreign('id_khachHang')->references('id')->on('KhachHang')->onUpdate('cascade');
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
        Schema::dropIfExists('Ve');
    }
};

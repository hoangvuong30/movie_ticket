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
        Schema::create('Phim', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten',200)->unique();
            $table->time('thoiLuong', $precision = 0);
            $table->date('ngayChieu');
            $table->string('dienVien',200);
            $table->string('quocGia',200);
            $table->string('nhaSanXuat',200);
            $table->string('tomTat',200);
            $table->boolean("trangThaiPhim")->default(false);
            $table->integer('id_loai')->unsigned();
            $table->foreign('id_loai')->references('id')->on('LoaiPhim')->onUpdate('cascade');
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
        Schema::dropIfExists('Phim');
    }
};

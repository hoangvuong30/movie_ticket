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
        Schema::create('KhachHang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten',100);
            $table->string('passWord',100);
            $table->string('soDienThoai',12);
            $table->string('diaChi',200);
            $table->date('ngaySinh');
            $table->boolean('gioiTinh');
            $table->string('cmnd',20);
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
        Schema::dropIfExists('KhachHang');
    }
};

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
        Schema::create('Ghe', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('trangThaiGhe')->default(false);
            $table->integer('id_phongChieu')->unsigned();
            $table->foreign('id_phongChieu')->references('id')->on('PhongChieu')->onUpdate('cascade');
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
        Schema::dropIfExists('Ghe');
    }
};

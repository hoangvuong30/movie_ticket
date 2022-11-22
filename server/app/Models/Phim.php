<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phim extends Model
{
    protected $table="Phim";
    protected $filltable=['id','id_loai','ten','thoiLuong','ngayChieu',
    'dienVien','quocGia','nhaSanXuat','tomTat','trangThaiPhim'];
}

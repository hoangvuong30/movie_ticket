<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuatChieu extends Model
{
    protected $table="SuatChieu";
    protected $filltable=['id','gioBatDau','gioKetThuc','ngayChieu',
    'id_phongChieu','id_phim'];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ve extends Model
{
    protected $table="Ve";
    protected $filltable=['id','ngayBan','thanhTien','id_ghe','id_khachHang','id_suatChieu'];
}

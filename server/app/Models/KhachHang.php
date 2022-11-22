<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table="KhachHang";
    protected $filltable=['id','ten','passWord','sdt','diaChi','ngaySinh',
    'gioiTinh','cmnd'];

    protected $hidden=[
        'passWord'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiPhim extends Model
{
    protected $table="LoaiPhim";
    protected $filltable=['id','ten'];
}

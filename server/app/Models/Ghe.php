<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ghe extends Model
{
    protected $table="Ghe";
    protected $filltable=['id','trangThaiGhe','id_phong'];
}

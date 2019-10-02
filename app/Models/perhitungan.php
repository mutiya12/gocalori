<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\perhitungan as Authenticatable;


class perhitungan extends Model{
    protected $fillable=[
        'tinggi', 'berat', 'usia', 'gender', 'kegiatan', 'perhitungan',
    ];
}

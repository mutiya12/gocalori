<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class menumakan extends Model
{
    protected $fillable=[
        'name', 'harga', 'tot_kalori', 'keterangan','foto'
    ];
}

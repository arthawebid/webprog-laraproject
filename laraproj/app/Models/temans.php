<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class temans extends Model
{
    protected $table = 'temans';
    protected $fillable = [
        'nama',
        'alamat',
        'kota',
        'wa'
    ];
}

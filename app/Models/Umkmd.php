<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Umkmd extends Model
{
    
    protected $table = 'umkmd';
    protected $fillable = [
        'nama',
        'pemilik',
        'alamat',
        'no_hp',
        'jenis_usaha',
        'tahun_berdiri',
    ];

}

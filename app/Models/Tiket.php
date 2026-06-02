<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Tiket extends Model
{
    protected $table = 'tikets';

protected $fillable = [
    'nama',
    'alamat',
    'kota',
    'jumlah',
    'harga',
    'diskon',
    'total_harga'
];
}
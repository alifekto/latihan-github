<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index()
    {
        $umkm = [
            (object)[
                'nama' => 'UMKM A',
                'pemilik' => 'Pemilik A',
                'alamat' => 'Alamat A',
                'no_hp' => '081234567890',
                'jenis_usaha' => 'Kuliner',
                'tahun_berdiri' => 2010
            ],
            (object)[
                'nama' => 'UMKM B',
                'pemilik' => 'Pemilik B',
                'alamat' => 'Alamat B',
                'no_hp' => '081234567891',
                'jenis_usaha' => 'Fashion',
                'tahun_berdiri' => 2015
            ],
            (object)[
                'nama' => 'UMKM C',
                'pemilik' => 'Pemilik C',
                'alamat' => 'Alamat C',
                'no_hp' => '081234567892',
                'jenis_usaha' => 'Kerajinan Tangan',
                'tahun_berdiri' => 2018
            ],
            (object)[
                'nama' => 'UMKM C',
                'pemilik' => 'Pemilik C',
                'alamat' => 'Alamat C',
                'no_hp' => '081234567892',
                'jenis_usaha' => 'Kerajinan Tangan',
                'tahun_berdiri' => 2018
            ]
        ];

        return view('umkm', compact('umkm'));
    }
}

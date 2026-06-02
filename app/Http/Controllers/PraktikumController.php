<?php

namespace App\Http\Controllers;

class PraktikumController extends Controller
{
    public function index()
    {
        $hari = 'Senin';
        $tanggal = '23 Februari 2026';
        $jam = '07.30 - 11.10';
        $kelas = 'Kelas Daring';
        $lab = 'Lab Sistem Informasi';
        $url = 'URL Belum tersedia';
        $pertemuan = 1;

        return view('praktikum', compact('hari', 'tanggal', 'jam', 'kelas', 'lab', 'url', 'pertemuan'));

    }

}
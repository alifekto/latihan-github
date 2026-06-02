<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {
        $nama = "Giska Saputra";
        $mataKuliah = ["Pemrograman Akuntansi 1", "Laravel", "Bahasa Indonesia"];
        return view('belajar', compact('nama', 'mataKuliah'));
    }
}
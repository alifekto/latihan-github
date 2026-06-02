<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Umkmd;

class UmkmdController extends Controller
{

    public function index()
{
    $Umkm = Umkmd::all(); 
    
    // Sesuaikan dengan nama file: umkmd.blade.php
    return view('umkmd', compact('Umkm')); 
}
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'pemilik' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jenis_usaha' => 'required',
            'tahun_berdiri' => 'required|integer',
        ]);

        Umkmd::create([
            'nama' => $request->nama,
            'pemilik' => $request->pemilik,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'jenis_usaha' => $request->jenis_usaha,
            'tahun_berdiri' => $request->tahun_berdiri,
        ]);
       
        return redirect('/umkmd')->with('success', 'Data Berhasil DItambahkan');
    }
}
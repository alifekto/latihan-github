<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('Pendaftaran');
    }
    
    public function hasil(Request $request)
    {
        $nama = $request->input('nama');
        $tempat_lahir = $request->input('tempat_lahir');
        $tanggal_lahir = $request->input('tanggal_lahir');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $nomor = $request->input('nomor');
        $alamat = $request->input('alamat');
        $jurusan = $request->input('jurusan');
        $biaya_sumbangan = $request->input('biaya_sumbangan');
        $biaya_semester = $request->input('biaya_semester');
        $metode_pembayaran = $request->input('metode_pembayaran');
        $tanggal_bayar = $request->input('tanggal_bayar');

        return view('Hasil', compact('nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'nomor', 'alamat', 'jurusan', 'biaya_sumbangan', 'biaya_semester', 'metode_pembayaran', 'tanggal_bayar'));
}
}

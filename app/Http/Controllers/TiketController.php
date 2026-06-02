<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;

class TiketController extends Controller
{
    // Menampilkan form
    public function tiket()
    {
        return view('tiket');
    }

    // Proses data
    public function hasil(Request $request)
    {
        $nama = $request->nama;
        $alamat = $request->alamat;
        $kota = $request->kota;
        $jumlah = $request->jumlah;

        // Tentukan harga
        if ($kota == "Solo") {
            $harga = 450000;
        } elseif ($kota == "Semarang") {
            $harga = 350000;
        } elseif ($kota == "Yogyakarta") {
            $harga = 400000;
        } elseif ($kota == "Surabaya") {
            $harga = 550000;
        } else {
            $harga = 0;
        }

        // Hitung total
        $total = $harga * $jumlah;

        // Diskon
        if ($jumlah > 3) {
            $diskon = 0.1 * $total;
        } else {
            $diskon = 0;
        }

        // Total bayar
        $bayar = $total - $diskon;

          // 🔥 Simpan ke database
        $tiket = Tiket::create([
            'nama' => $nama,
            'alamat' => $alamat,
            'kota' => $kota,
            'jumlah' => $jumlah,
            'harga' => $harga,
            'diskon' => $diskon,
            'total_harga' => $bayar
        ]);

        return view('tiket_hasil', compact(
            'nama',
            'alamat',
            'kota',
            'harga',
            'diskon',
            'bayar'
        ));
    }
}
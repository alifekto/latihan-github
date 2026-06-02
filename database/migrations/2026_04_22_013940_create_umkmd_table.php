<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('umkmd', function (Blueprint $table) {
            $table->id(); // Membuat Primary Key 'id' otomatis
            $table->string('nama');
            $table->string('pemilik');
            $table->text('alamat'); // Menggunakan 'text' karena alamat bisa saja panjang
            $table->string('no_hp', 20); // Menggunakan 'string' lebih aman untuk nomor HP (misal ada '+62')
            $table->string('jenis_usaha');
            $table->year('tahun_berdiri'); // Tipe data 'year' cocok untuk menyimpan tahun 4 digit
            $table->timestamps(); // Membuat kolom 'created_at' dan 'updated_at' otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkmd');
    }
};
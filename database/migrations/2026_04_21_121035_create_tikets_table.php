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
    Schema::create('tikets', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->text('alamat');
        $table->string('kota');
        $table->integer('jumlah');
        $table->decimal('harga', 12, 2);
        $table->decimal('diskon', 12, 2)->default(0);
        $table->decimal('total_harga', 12, 2);
        $table->timestamps(); // Menghasilkan created_at & updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tikets');
    }
};

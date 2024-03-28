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
        Schema::create('data_pembelians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('keranjang_id');
            $table->string('nama_pembeli');
            $table->integer('total');
            $table->dateTime('waktu_pembelian');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pembelians');
    }
};

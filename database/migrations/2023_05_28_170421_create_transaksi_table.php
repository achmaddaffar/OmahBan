<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('id_transaksi')->unique();
            $table->string('id_struk');
            $table->foreign('id_struk')->references('id_struk')->on('struk')->onDelete('cascade');
            $table->string('kode_part');
            $table->foreign('kode_part')->references('kode_part')->on('ban')->onDelete('cascade');
            $table->string('id_pembeli');
            $table->foreign('id_pembeli')->references('id_pembeli')->on('pembeli')->onDelete('cascade');
            $table->string('id_mekanik');
            $table->foreign('id_mekanik')->references('id_mekanik')->on('mekanik')->onDelete('cascade');
            $table->integer('jumlah');
            $table->bigInteger('total_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
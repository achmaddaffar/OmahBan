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
        Schema::create('struk', function (Blueprint $table) {
            $table->id();
            $table->string('id_struk')->unique();
            $table->string('id_pembeli');
            $table->foreign('id_pembeli')->references('id_pembeli')->on('pembeli')->onDelete('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('struk');
    }
};
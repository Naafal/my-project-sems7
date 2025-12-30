<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_order_details_table.php
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            // Hubungkan ke tabel orders
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            
            $table->string('nama_barang');
            $table->string('layanan'); // Deep Clean, Repaint, dll
            $table->decimal('harga', 10, 2);
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }       

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};

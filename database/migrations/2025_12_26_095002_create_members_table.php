<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_members_table.php
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            // Menghubungkan ke tabel customers. Jika customer dihapus, data member ikut hilang (cascade)
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->integer('poin')->default(0);
            $table->decimal('total_transaksi', 15, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};

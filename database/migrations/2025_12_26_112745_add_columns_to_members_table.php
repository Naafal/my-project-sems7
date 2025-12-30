<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::table('members', function (Blueprint $table) {
        // Cek dulu biar tidak error kalau sudah ada
        if (!Schema::hasColumn('members', 'level')) {
            $table->string('level')->default('Silver');
        }
        if (!Schema::hasColumn('members', 'poin')) {
            $table->integer('poin')->default(0);
        }
        if (!Schema::hasColumn('members', 'total_transaksi')) {
            $table->decimal('total_transaksi', 15, 2)->default(0);
        }
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('members', function (Blueprint $table) {
            //
        });
    }
};

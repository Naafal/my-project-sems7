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
    Schema::table('orders', function (Blueprint $table) {
        // Cek dulu biar tidak error kalau kolomnya ternyata sudah ada
        if (!Schema::hasColumn('orders', 'tipe_customer')) {
            $table->string('tipe_customer')->nullable()->after('status_order');
        }
        
        if (!Schema::hasColumn('orders', 'sumber_info')) {
            $table->string('sumber_info')->nullable()->after('tipe_customer');
        }

        if (!Schema::hasColumn('orders', 'catatan')) {
            $table->text('catatan')->nullable()->after('sumber_info');
        }

        if (!Schema::hasColumn('orders', 'kasir')) {
            $table->string('kasir')->default('Admin')->after('catatan');
        }
    });
}

public function down()
{
    Schema::table('orders', function (Blueprint $table) {
        $table->dropColumn(['tipe_customer', 'sumber_info', 'catatan', 'kasir']);
    });
}
};

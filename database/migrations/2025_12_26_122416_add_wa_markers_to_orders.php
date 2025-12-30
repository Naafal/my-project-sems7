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
        $table->boolean('wa_sent_1')->default(false)->after('status_order'); // Tombol Kiri
        $table->boolean('wa_sent_2')->default(false)->after('wa_sent_1');    // Tombol Kanan
    });
}

public function down()
{
    Schema::table('orders', function (Blueprint $table) {
        $table->dropColumn(['wa_sent_1', 'wa_sent_2']);
    });
}
};

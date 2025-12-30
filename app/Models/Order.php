<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    // Order dimiliki oleh 1 Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Order punya BANYAK Detail Sepatu
    // Perhatikan: parameter kedua 'order_id' memastikan dia nyambung ke tabel order_details
    public function details()
    {
        return $this->hasMany(OrderDetail::class, 'order_id');
    }
}
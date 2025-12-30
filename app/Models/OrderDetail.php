<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $guarded = [];
    
    // Opsional: Jika ingin mengakses data order dari detail
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
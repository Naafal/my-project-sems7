<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];

    // Relasi: Customer mungkin punya 1 data Member
    public function member()
    {
        return $this->hasOne(Member::class);
    }

    // Relasi: Customer punya BANYAK Order
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
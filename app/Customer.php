<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'contact',
        'email',
        'facebook',
    ];

    public function customerName()
    {
        return $this->hasMany(DailySale::class);
    }

    public function customerConsumable()
    {
        return $this->hasOne(CunsumableHeader::class);
    }

    public function rushFee()
    {
        return $this->hasOne(RushFee::class);
    }
}

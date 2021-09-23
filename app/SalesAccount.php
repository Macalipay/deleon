<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesAccount extends Model
{
    protected $fillable = [
        'sales'
    ];

    public function salesAccount()
    {
        return $this->hasMany(salesAccount::class);
    }

    public function salesAccountConsumable()
    {
        return $this->hasOne(salesAccount::class);
    }
}

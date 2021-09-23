<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product'
    ];

    public function productType()
    {
        return $this->hasMany(DailySale::class);
    }
}

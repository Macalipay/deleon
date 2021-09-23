<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumable extends Model
{
    protected $fillable = [
        'code',
        'consumable'
    ];

    public function inventory()
    {
        return $this->hasOne(Inventory::class);
    }
}

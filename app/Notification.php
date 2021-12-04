<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'inventory_id',
        'description',
        'status',
    ];

    public function inventory_notif()
    {
        return $this->belongsTo(Inventory::class, 'inventory_id');
    }
}

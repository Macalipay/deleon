<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsumableDetails extends Model
{
    protected $fillable = [
        'consumable_header_id',
        'inventory_id',
        'quantity',
        'description',
        'unit_price',
        'total',
    ];

    public function inventory()
    {
        return $this->belongsTo(Inventory::class, 'inventory_id');
    }

    public function consumable_header()
    {
        return $this->belongsTo(ConsumableHeader::class, 'consumable_header_id');
    }
}

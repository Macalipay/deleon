<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'consumable_id',
        'total_count',
        'price',
        'selling_price',
        'critical_level',
        'sold_count',
        'quantity_stock',
        'supplier',
        'status',
    ];

    public function consumable()
    {
        return $this->belongsTo(Consumable::class, 'consumable_id');
    }

    public function inventory_transaction()
    {
        return $this->hasMany(InventoryTransaction::class);
    }

    public function inventory_consumable()
    {
        return $this->hasOne(ConsumableDetails::class);
    }
}

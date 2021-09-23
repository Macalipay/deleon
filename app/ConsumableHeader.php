<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsumableHeader extends Model
{
    protected $fillable = [
        'code',
        'title',
        'customer_id',
        'sales_id',
        'subtotal',
        'total',
        'balance',
        'status',
        'payment_status',
        'user_id',
        'type',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function sales()
    {
        return $this->belongsTo(SalesAccount::class, 'sales_id');
    }
}

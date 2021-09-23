<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RushFee extends Model
{
    protected $fillable = [
        'customer_id',
        'amount',
        'date',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}

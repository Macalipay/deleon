<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailySale extends Model
{
    protected $fillable = [
        'customer_id',
        'sales_id',
        'product_id',
        'description',
        'quantity',
        'amount',
        'date',
        'balance',
        'production_status',
        'payment_status',
        'user_id'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function sales()
    {
        return $this->belongsTo(SalesAccount::class, 'sales_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function payment()
    {
        return $this->belongsTo(PaymentType::class, 'payment_id');
    }

    public function daily_payment()
    {
        return $this->hasMany(Payment::class);
    }
}

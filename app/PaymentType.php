<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    protected $fillable = [
        'payment'
    ];

    public function paymentType()
    {
        return $this->hasMany(DailySale::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function expensetype()
    {
        return $this->hasOne(Expense::class);
    }
}

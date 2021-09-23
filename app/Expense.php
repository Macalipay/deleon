<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'expensetype_id',
        'description',
        'amount',
        'user_id',
        'paymenttype_id',
        'date',
    ];

    public function expense_type()
    {
        return $this->belongsTo(ExpenseType::class, 'expensetype_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function payment_type()
    {
        return $this->belongsTo(PaymentType::class, 'paymenttype_id');
    }
}

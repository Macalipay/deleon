<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseType extends Model
{
    protected $fillable = [
        'expense',
        'color'
    ];

    public function expense()
    {
        return $this->hasOne(Expense::class);
    }
}

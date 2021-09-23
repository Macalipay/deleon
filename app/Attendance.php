<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'time_in',
        'time_out',
        'status',
    ];

    public function employee()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

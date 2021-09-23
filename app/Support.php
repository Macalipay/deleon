<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Support extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'contact',
        'picture',
        'status',
        'deleted_at',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tutorial extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'link',
        'deleted_at',
    ];
}

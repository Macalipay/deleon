<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes; 
    
    protected $fillable = [
        'name',
        'company_name',
        'address',
        'city',
        'date_purchase',
        'contact',
        'facebook_page',
        'picture',
        'deleted_at',
        'status',
    ];

    
}

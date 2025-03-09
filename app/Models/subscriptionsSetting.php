<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class subscriptionsSetting extends Model
{
    use SoftDeletes;
    protected $casts = [
        'desc' => 'json',
    ];
    protected $table = 'subscriptionsSetting';

    protected $fillable = [
        'title',
        'desc',
        'price',
        'type',
        'isActive',
    ];


    
}
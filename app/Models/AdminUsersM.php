<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminUsersM extends Model
{
    use SoftDeletes;
    
    protected $table = 'admin_users';

    protected $fillable = [
        "username",
        "password",
        "name",
        "avatar",
        "subscription",
    ];
    // protected $casts = [
    //     'images' => 'json',
    //     'slides' => 'json',
    //     'frames' => 'json',
    // ];

    // function byuid() {
    //     return $this->belongsTo(appUsers::class, 'uid');
    // }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class appUsers extends Authenticatable
{
    use SoftDeletes, HasApiTokens, HasFactory;

    protected $table = 'appUsers';
    
    protected $fillable = ['name', 'email', 'password','address', 'phone', 'subscription', 'totalStorage', 'remaingStorage','isActive', 'img'];
    
    protected $casts = [
        'sharedTo' => 'json',
        'sharedFrom' => 'json'
    ];


    public function appusers()
    {
        // return $this->hasMany(appUsers::class);
        return $this->belongsToMany(appUsers::class);
    }

    public function getplans()
    {
        return $this->belongsTo(subscriptionsSetting::class,"subscription");
    }
   

    

}
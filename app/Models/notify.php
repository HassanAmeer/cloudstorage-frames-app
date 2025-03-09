<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class notify extends Model
{
    protected $table = 'notify';
    protected $fillable = ['uid','title','desc']; 
    
    public function byuid()
    {
        return $this->belongsTo(appUsers::class,"uid");
    }
}
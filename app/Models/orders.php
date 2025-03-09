<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class orders extends Model
{
    use SoftDeletes;
    
    protected $table = 'orders';

    protected $fillable = [
        'uid',
        'images',
        'status',
        'slides',
        'frames',
        'price',
        'isPay',
        'trId',
        'desc',
    ];
    protected $casts = [
        'images' => 'json',
        'slides' => 'json',
        'frames' => 'json',
    ];

    function byuid() {
        return $this->belongsTo(appUsers::class, 'uid');
    }

    function byframeids() {
        return frames::whereIn('id', $this->frames ?? [])->get();
        // return $this->belongsToMany(frames::class);
        // return $this->belongsTo(frames::class, 'id');
    }
}
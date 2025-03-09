<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionHistory extends Model
{
    use SoftDeletes;

    protected $table = 'TransactionHistory';
    protected $fillable = [
        'uid',
        'status',
        'plantype',
        'payfor',
        'folderstorage',
        'foldername',
        'frameid',
        'price',
        'trid',
    ];
    
     protected $casts = [
        'frameid' => 'json',
    ];
    
    
    function byuid() {
        return $this->belongsTo(appUsers::class, 'uid');
    }

    function byframeids() {
        return frames::whereIn('id', $this->frameid ?? [])->get();
        // return $this->belongsToMany(frames::class);
        // return $this->belongsTo(frames::class, 'id');
    }
}

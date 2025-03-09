<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cloudstorage extends Model
{
    use SoftDeletes;
    protected $table = 'cloudstorage';

    protected $fillable = [
        'uid',
        'folderId',
        'folderName',
        'totalsize',
        'usedsize',
        'subscription',
        'items',
        'shared',
    ];

    protected $casts = [
        'items' => 'json',
        'shared' => 'json',
    ];

    public function appusers()
    {
        return appUsers::whereIn('id', $this->shared ?? [])->get();
    }
    
    public function byuid()
    {
        return $this->belongsTo(appUsers::class,"uid");
    }



    public function getplans()
    {
        return $this->belongsTo(subscriptionsSetting::class,"subscription");
    }


}
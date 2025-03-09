<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class customroutesmodel extends Model
{
    use SoftDeletes;

    protected $table = 'admin_menu';
    

    protected $fillable = [
        'title',
        'icon',
    ];


}
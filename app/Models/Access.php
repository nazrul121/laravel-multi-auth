<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    protected $guarded = [];

    // relationship 

    function users(){
        return $this->belongsToMany(User::class);
    }
}

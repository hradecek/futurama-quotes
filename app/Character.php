<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $guarded = [ 'name', 'nick' ];

    protected $hidden = [ 'id' ];

    public function quotes()
    {
        return $this->belongsToMany(Quote::class);
    }
}

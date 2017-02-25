<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'number' ];

    public function season()
    {
        return $this->belongsTo(Season::class);
    }
}

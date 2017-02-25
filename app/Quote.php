<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'text' ];

    public function episode()
    {
        return $this->belongsTo(Episode::class);
    }

    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }
}

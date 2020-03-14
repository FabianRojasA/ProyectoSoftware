<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{

    protected $fillable = [
        'nombre','pais'
    ];

    public function groups(){
        return $this->belongsToMany(Group::class);
    }

    public function researchers(){
        return $this->belongsToMany(Researcher::class);
    }
}

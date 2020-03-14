<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Researcher extends Model
{
    protected $fillable = [
        'numPasaporte','estado','pais'
    ];

    public function groups(){
        return $this->belongsToMany(Group::class);
    }

    public function user(){
        return $this->hasOne(User::class);
    }

    public function unit(){
        return $this->hasOne(Unit::class);
    }
}

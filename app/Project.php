<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'nombre','codigo','estado','fechaInicio','fechaTermino'
    ];

    public function group(){
        return $this->belongsTo(Group::class);
    }

    public function product(){
        return $this->hasOne(Product::class);
    }
    
}

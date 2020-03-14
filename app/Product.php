<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nombre','descripcion','fechaCreacion'
    ];

    public function group(){
        return $this->belongsTo(Group::class);
    }

    public function project(){
        return $this->belongsTo(Project::class);
    }
}

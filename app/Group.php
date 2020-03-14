<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ProjectsTableSeeder;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class Group extends Model
{

    protected $table = 'Groups';

    protected $fillable = [
        'nombre','logo','nombreUnidad','paisUnidad'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function projects(){
        return $this->hasMany((Project::class));
    }

    public function researchers(){
        return $this->belongsToMany(Researcher::class);
    }

    public function units(){
        return $this->belongsToMany((Unit::class));
    }
}

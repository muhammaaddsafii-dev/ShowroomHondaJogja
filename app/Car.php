<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['name', 'slug', 'capacity', 'seat', 'speed', 'price', 'thumbnail1', 'thumbnail2', 'thumbnail3', 'thumbnail4',];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $fillable = ['name', 'slug', 'type', 'transmision', 'price', 'thumbnail'];
}

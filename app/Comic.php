<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['title', 'description', 'series', 'thumb', 'sale_date', 'type', 'price'];
}

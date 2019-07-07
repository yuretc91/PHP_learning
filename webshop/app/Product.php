<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'name', 'url', 'image', 'content', 'price', 'cat_id', 'stock', 'active'
    ];
}

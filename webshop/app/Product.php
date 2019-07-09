<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'cathegory_name', 'name', 'url', 'image', 'content', 'price', 'cathegory_id', 'stock', 'active'
    ];
    public function cathegory()
    {
        return $this->belongsTo('App\Cathegory');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'cathegory_id', 'title', 'info',  'image', 'price', 'availability', 'properties'
    ];
    public function cathegory()
    {
        return $this->belongsTo('App\Cathegory');
    }
}

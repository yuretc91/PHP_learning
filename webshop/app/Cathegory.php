<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cathegory extends Model
{
    protected $fillable = [
        'name', 'url', 'image', 'description'
    ];
    public function products()
    {
       return $this->hasMany('App\Product');
    }
    public $timestamps = false;
}

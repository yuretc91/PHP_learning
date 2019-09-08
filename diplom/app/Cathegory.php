<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cathegory extends Model
{
    protected $fillable = [
        'name', 'description',  'picture'
    ];
    public function products()
    {
        return $this->hasMany('App\Product');
    }
    public function properties()
    {
        return $this->hasMany('App\Property');
    }
}

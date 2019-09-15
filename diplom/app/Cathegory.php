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
    public function property()
    {
        return $this->hasOne('App\Property');
    }
}

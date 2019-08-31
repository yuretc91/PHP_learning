<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cathegory extends Model
{
    protected $fillable = [
        'name', 'description',  'picture'
    ];
    public function cathegory()
    {
        return $this->hasMany('App\Product');
    }
}

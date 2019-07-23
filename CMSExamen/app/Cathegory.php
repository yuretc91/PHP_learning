<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cathegory extends Model
{
    protected $fillable = [
        'name', 'description'
    ];
    public function anekdots()
    {
        return $this->hasMany('App\Anekdot');
    }
}

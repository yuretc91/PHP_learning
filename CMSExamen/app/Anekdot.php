<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anekdot extends Model
{
    protected $fillable = [
        'title', 'content'
    ];
}

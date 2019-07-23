<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anekdot extends Model
{
    protected $fillable = [
        'title', 'content', 'cathegory_id', 'author', 'approved'
    ];
    public function cathegory()
    {
        return $this->belongsTo('App\Cathegory');
    }
}

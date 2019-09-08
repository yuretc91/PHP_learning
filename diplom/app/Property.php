<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'cathegory_id', 'properties'
    ];
    public function cathegory()
    {
        return $this->belongsTo('App\Cathegory');
    }
}

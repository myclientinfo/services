<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $fillable = ['photo', 'title'];

    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public $timestamps = false;

    public function period()
    {
        return $this->belongsTo('App\Period');
    }
}

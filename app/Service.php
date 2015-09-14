<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'active'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function suppliers()
    {
        return $this->belongsToMany('App\Supplier');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'active'];

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }

    public function services()
    {
        return $this->belongsToMany('App\Service');
    }

    public function rates()
    {
        return $this->hasMany('App\Rate');
    }
}

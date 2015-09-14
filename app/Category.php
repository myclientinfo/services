<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'active'];

    protected $hidden = ['active'];

    public function services()
    {
        return $this->hasMany('App\Service');
    }
}

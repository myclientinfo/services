<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'active'];

    protected $hidden = ['active'];

    public function suppliers()
    {
        return $this->hasMany('App\Supplier');
    }
}

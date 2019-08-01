<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    public $timestamps = false;
    public function articles()
    {
        return $this->hasMany('App\Article');
    }

    public function projects()
    {
        return $this->hasMany('App\Project');
    }
   /* public function categorizable()
    {
     return $this->morphTo();
    }*/
}

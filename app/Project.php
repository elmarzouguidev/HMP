<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

    public function galleries()
    {
        return $this->hasMany('App\Gallery');
    }

    public function society()
    {
        return $this->belongsTo('App\Society');
    }
}

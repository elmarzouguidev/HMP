<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    
    public function galleries()
    {
        return $this->hasMany('App\Gallery');
    }

    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}

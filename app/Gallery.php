<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //

    public function society()
    {
        return $this->belongsTo('App\Society');
    }

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}

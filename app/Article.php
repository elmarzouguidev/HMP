<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //

    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

   /* public function categories()
    {
       return $this->morphMany('App\Category', 'categorizable');
    }*/

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}

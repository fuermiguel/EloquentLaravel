<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //protected $primaryKey = "writer_id";

    public function writer()
    {
        return $this->belongsTo('App\Writer');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
}

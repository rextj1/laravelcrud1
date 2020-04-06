<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    // maths assignment
    protected $fillable=['name','description','cover_image'];

    // this is the parent model
    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //
    protected $fillable=['name','email','address','website','bio','phone'];
    public function user(){
        return $this->belongsTo('App\User');
    }
}


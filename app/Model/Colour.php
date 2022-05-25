<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Colour extends Model
{
    public function cars(){
        return $this->belongsToMany('App\Car');
    }
}

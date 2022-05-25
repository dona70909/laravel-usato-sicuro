<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function brand() {
        return $this->belongsTo('App\Model\Brand');
    }

    public function colours(){
        return $this->belongsToMany('App\Model\Colour');
    }
}

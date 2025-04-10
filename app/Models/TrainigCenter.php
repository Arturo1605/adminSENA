<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainigCenter extends Model
{
    //
    public function courses(){
        return $this->hasMany(Courses::class);
    }
    public function teachers(){
        return $this->hasMany(Teachers::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    // 
    public function teachers(){
        return $this->hasMany(Teachers::class);
    }

    public function courses(){
        return $this->hasMany(Courses::class);
    }

}

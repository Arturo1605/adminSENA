<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    //
    public function trainigCenter(){
        return $this->belongsTo(TrainigCenter::class);
    }

    public function area(){
        return $this->belongsTo(Areas::class);
    }

    public function courses(){
        return $this->belongsToMany(Courses::class);
    }
}

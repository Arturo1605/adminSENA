<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    //
    public function apprentices(){
        return $this->hasMany(Apprentices::class);
    }
    
    public function trainigCenter(){
        return $this->belongsTo(TrainigCenter::class);
    }

    public function teachers(){
        return $this->belongsToMany(Teachers::class);
    }

    public function area(){
        return $this->belongsTo(Areas::class);
    }

}

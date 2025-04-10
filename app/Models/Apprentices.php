<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apprentices extends Model
{
    //
    public function computer(){
        return $this->belongsTo(Computer::class);
    }

    public function course(){
        return $this->belongsTo(Courses::class);
    }



}

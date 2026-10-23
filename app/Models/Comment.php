<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function posts(){
        return $this->belongsTo(Posts::class);
    }


    public function photos(){
        return $this->hasMany(Photo::class);
    }
}

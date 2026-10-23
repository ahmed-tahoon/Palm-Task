<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    

protected $fillable = ['title', 'descirption'];

 public function comments(){
    return $this->hasMany(Comment::class);
 }


 public function photos() {
     return $this->hasMany(Photo::class);
 }



}

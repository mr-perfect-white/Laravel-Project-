<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class post extends Model
{
    use HasFactory;

}


public function comments()
{
    return $this->hasMany('App\Models\Comment');
}
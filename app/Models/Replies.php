<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comments;

class Replies extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'comments_id',
        'is_active',
        'author',
        'email',
        'body',
        'created_at',
        'updated_at',
        
    ];
}

public function Comments(){

    return $this->hasMany('App\Models\Reply');
}
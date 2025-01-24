<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use App\Models\Replies;


class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'post_id',
        'is_active',
        'author',
        'email',
        'body',
        'created_at',
        'updated_at',
        
    ];


}


    public function Replies(){

        return $this->hasMany('App\Models\Reply');
    }
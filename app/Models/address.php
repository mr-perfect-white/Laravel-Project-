<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    use HasFactory;

    protected $table = "addresss";



    protected $fillable = [
        'name',
        'email',
        'user_id',
        'email_verified_at',
        'password',
        
    ];
}

 
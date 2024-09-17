<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store_table extends Model
{
    use HasFactory;
   
    protected $table = "store_tables";


    protected $fillable = ['name', 'email_verified_at', 'phone', 'subject', 'message', 'path'];

}

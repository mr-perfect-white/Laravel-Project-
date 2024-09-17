<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    // Specify which attributes are mass assignable
    protected $fillable = ['name', 'email', 'password'];

    // Your user model's properties and methods
}

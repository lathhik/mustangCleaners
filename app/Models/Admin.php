<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admins';

//    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'address', 'contact', 'gender', 'status', 'privilege', 'image', 'remember_token'];


    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getLastNameAttribute($value)
    {
        return ucfirst($value);
    }

}

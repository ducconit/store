<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Mung9thang12\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use HasFactory;
    use HasRoles;
    use Notifiable;

    protected $guard_name ='web' ;

    protected $fillable=[
      'avatar','name','email','username','password','fb_link'
    ];
}

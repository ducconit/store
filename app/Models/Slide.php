<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $fillable=[
      'image','link','title_small','title_big','status','key','value','type'
    ];

    protected $casts=[
        'status'=>'boolean'
    ];
}

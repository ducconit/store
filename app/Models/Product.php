<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
      'poster','name','slug','status','price','quantity','user_id'
    ];

    protected $casts=[
        'status'=>'boolean'
    ];

    function images(){
        return $this->hasMany(ImageProduct::class);
    }

    function categories(){
        return $this->belongsToMany(Category::class);
    }

    function user(){
        return $this->belongsTo(User::class);
    }
}

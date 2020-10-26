<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable=[
        'name','slug','parent_id'
    ];

    function products(){
        return $this->belongsToMany(Product::class);
    }

    function children(){
        return $this->hasMany($this,'parent_id');
    }

    function parent(){
        return $this->belongsTo($this,'parent_id');
    }
}

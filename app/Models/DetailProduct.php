<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProduct extends Model
{
    use HasFactory;

    protected $fillable=[
        'product_id','description','isComment'
    ];
    protected $casts=[
        'isComment'=>'boolean'
    ];

    function product(){
        return $this->belongsTo(Product::class);
    }
}

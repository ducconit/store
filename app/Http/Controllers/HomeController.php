<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $products=Product::all();
        $categories=Category::all();
        $users=User::all();
//        dump($users);
//        dump($users[0]->roles);
        return inertia('Index',['products'=>$products]);
    }
}

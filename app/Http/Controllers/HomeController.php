<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slide;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $bestSeller = Product::limit(8)->get();
        $topRate = Product::limit(8)->get();
        $newProduct = Product::orderBy('created_at', 'desc')->limit(8)->get();
        $slides = Slide::orderBy('created_at', 'desc')->get();

        return inertia('Index', [
            'newProduct' => $newProduct,
            'bestSeller' => $bestSeller,
            'topRate' => $topRate,
            'slides' => $slides
        ]);
    }
}

<?php

use Illuminate\Support\Facades\Route;

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return Inertia\Inertia::render('Dashboard');
//})->name('dashboard');

/*==========MAIN WEB==============*/
//Index
Route::get('/','HomeController@index')->name('index');


//Category
Route::resource('category','CategoryController');
//Best Seller
Route::get('best-seller',function (){

})->name('best-seller');


//Product
Route::resource('product','ProductController');



/*============Shopping Cart============*/
Route::post('cart/add','CartController@addToCart')->name("addToCart");
Route::get('cart','CartController@index')->name("cart.index");
Route::get('checkout','CartController@checkOut')->name("cart.checkout");
Route::delete('cart/{id}','CartController@destroy')->name('cart.remove');


/*==================Pages==============*/


//about
Route::get('/about',function (){
    return inertia('About');
})->name('about');

//contact
Route::get('/contact',function (){
    return inertia('Contact');
})->name('contact');



//Login and register
Route::middleware('guest:customer')->get('login',function(){
    return inertia('Login');
})->name('login');


/*============ADMIN DASHBOARD===========*/
Route::prefix(config('admin.prefix'))
    ->middleware(['auth:sanctum', 'verified'])
    ->namespace('Admin')
    ->name('admin.')
    ->group( function () {
    require_once 'admin.php';
});


//composer require bumbummen99/shoppingcart

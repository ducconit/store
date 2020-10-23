<?php

use Illuminate\Support\Facades\Route;

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return Inertia\Inertia::render('Dashboard');
//})->name('dashboard');

/*==========MAIN WEB==============*/
Route::get('/','HomeController@index')->name('index');


//product
Route::resource('product','ProductController');






//pages
Route::get('/about',function (){
    return inertia('About');
})->name('about');
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

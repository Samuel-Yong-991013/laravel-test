<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//passing data with routing
Route::get('/', function () {
    return view('welcome');
    // return redirect("about");
});

// Route::get('/about', function(){
//     return view('about');
// });

// Route::get('/about', function(){
//     return view('contact');
// });

Route::view("about", 'about'); //Route::view("[URL]", ["page name"]);
Route::view("xyz", 'contact');
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Simple Route
// Route::get('/demo' , function(){
//     return view('demo');
// });

// Dynamic Routes
Route::any('/test/{name}' , function($name){
    echo "Hello ".$name;
});

Route::get('/demo/{name}/{id?}' , function($name , $id = null){
    $data = compact('name' , 'id');
    return view('demo')->with($data);
});


// Route::post('/users' , function(){
//     echo "Hello From Users";
// });

// Route::put('/users' , function(){
//     echo "Hello From Users";
// });

// Route::patch('/users' , function(){
//     echo "Hello From Users";
// });

// Route::delete('/users' , function(){
//     echo "Hello From Users";
// });

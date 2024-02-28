<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Simple Route
// Route::get('/demo' , function(){
//     return view('demo');
// });

// Dynamic Routes
// Route::any('/test/{name}' , function($name){
//     echo "Hello ".$name;
// });

// Route::get('/demo/{name}/{id?}' , function($name , $id = null){
//     $data = compact('name' , 'id');
//     return view('demo')->with($data);
// });


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


// Route::get('/{name?}' , function($name = null){
//     $demo = "<h2>DEMO Heading</h2>";
//     $data = compact('name' , 'demo');
//     return view('home')->with($data);
// });

// Route::get('/' , function(){
//     return view('home1');
// });


// Route::get('/about' , function(){
//     return view('about');
// });

// Route::get('/course' , function(){
//     return view('course');
// });



// Working on Controller
Route::get('/' , [demoController::class , 'index']);

Route::get('/about' , 'App\Http\Controllers\demoController@about');

Route::get('/course' , SingleActionController::class, '__invoke');

Route::resource('photo' , PhotoController::class);

Route::get('/register' , [RegistrationController::class , 'index']);
Route::post('/register' , [RegistrationController::class , 'register']);
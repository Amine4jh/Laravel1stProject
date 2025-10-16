<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',[UserController::class,'get_login']);

Route::get('article', function() {
    return view('article',['name' => 'Amine']);
});

Route::get('layout', function() {
    return view('layout');
});

// Just an exercice for practice
Route::get('hi', function() {
    return "Welcome";
});

Route::get('yourname/{name}', function($name) {
    return "Welcome, $name";
});

Route::get('yourname/{name?}', function($name = "John") {
    return "Welcome, $name";
});

// Route::get('welcome', function() {
//     return view('login.welcome');
// });

Route::get('welcome/{name?}', function($name = 'Amine') {
    return view('login.welcome', ['name' => $name]);
});

Route::get('control', [UserController::class, 'getWelcome']);

Route::fallback(function() {
    return view('fallback');
});

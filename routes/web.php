<?php

use App\Http\Controllers\FlightsController;
use App\Http\Controllers\UserController;
use App\Models\Flight;
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


// Route::get('flights', function() {
//     return Flight::all();
// });
Route::get('flights', [FlightsController::class, 'index'])->name('flights');
Route::get('create-flights', [FlightsController::class, 'create'])->name('create-flights');
Route::post('store_flight', [FlightsController::class, 'store'])->name('store_flight');
Route::get('edit_flight/{id}', [FlightsController::class, 'edit'])->name('edit_flight');
Route::post('update_flight/{id}', [FlightsController::class, 'update'])->name('update_flight');
Route::get('delete_flight/{id}', [FlightsController::class, 'delete'])->name('delete_flight');


Route::fallback(function() {
    return view('fallback');
});

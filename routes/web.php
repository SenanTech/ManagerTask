<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin;
use App\Models\Personne;
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

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/affiliate', function () {
    return view('fichier');
})->name('affiliate');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/hello', function(){
    return view('auth.home');
})->middleware('auth');
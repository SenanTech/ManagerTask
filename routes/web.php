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

Route::get('/', function () { return view('auth.login');})->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware(['auth', 'verified']);

Route::get('/affiliate', function () {
    return view('fichier');
})->name('affiliate');




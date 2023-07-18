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

Route::get('/home', function () { return view('home');})->name('home')->middleware(['auth','verified']);

Route::get('/user-list', [UserController::class, 'showUsers'])->name('user-list')->middleware(['auth']);


Route::get('/list', function () { return view('user.list');})->name('list');

Route::get('/user-add', function(){  return view('user.add');})->name('user-add')->middleware(['auth','verified']);

Route::post('/addUser', [UserController::class, 'addUsers'])->name('addUser');
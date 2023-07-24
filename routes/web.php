<?php
use Illuminate\Support\Facades\Route;
use App\Models\Admin;
use App\Models\Personne;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TacheController;

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
Route::get('/', function () { return redirect()->route('home'); }) ;

//Route::middleware(['auth','verified'])->group(function () {

    Route::get('/home', function () { return view('home');})->name('home');

    Route::get('/user-list', [UserController::class, 'showUsers'])->name('user-list');

    Route::get('/list', function () { return view('user.list');})->name('list');

    Route::get('/user-add', function(){  return view('user.add');})->name('user-add');

    Route::post('/addUser', [UserController::class, 'addUsers'])->name('addUser');
    
    Route::get('/account', function(){ return view('profil.account'); })->name('account');

    Route::post('/accountUpdate', [UserController::class, 'update'])->name('accountUpdate');

    Route::get('/security', function(){ return view('profil.security'); })->name('security');

    Route::post('/passwordUpdate', [UserController::class, 'passwordUpdate'])->name('passwordUpdate');

    Route::get('/user-edit/{id}', [UserController::class, 'editUser'])->name('user-edit');

    Route::post('/user-edit/{id}',[UserController::class, 'updateUser'])->name('user-update');
   
    Route::get('/user-delete/{id}',  [UserController::class, 'delete'])->name('user-delete');

    
    Route::get('/projects-create', [ProjectController::class, 'create'])->name('projects-create'); 

    Route::post('/creation-projet', [ProjectController::class, 'store'])->name('projet-creation'); 
    
    Route::get('/projects-list', [ProjectController::class, 'liste'])->name('projects-list'); 

    Route::get('/projects-edit/{id}', [ProjectController::class, 'edit'])->name('projects-edit'); 

    Route::post('/projects-update', [ProjectController::class, 'update'])->name('projects-update'); 

    Route::get('/projects-destroy/{id}', [ProjectController::class, 'destroy'])->name('projects-destroy'); 
  
    Route::get('/tache-create/{id}', [TacheController::class, 'create'])->name('tache-create'); 

    Route::post('/creation-tache', [TacheController::class, 'store'])->name('tache-creation'); 
    
    Route::get('/tache-list/{id}', [TacheController::class, 'liste'])->name('tache-list'); 

    Route::get('/tache-destroy/{id}', [TacheController::class, 'destroy'])->name('tache-destroy'); 
  
   

    

//});



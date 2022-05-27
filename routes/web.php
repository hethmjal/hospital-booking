<?php

use App\Http\Controllers\AlternateDirectorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SecurityManController;
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

Route::get('/', function () {
    return view('home.index');
})->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/home',[HomeController::class,'home'] )->name('home');
Route::get('/viewVisitors',[SecurityManController::class,'viewvisitors'] )->middleware(['auth'])->name('viewvisitors');
Route::get('/createVisitors',[AlternateDirectorController::class,'createvisitors'] )->middleware(['auth'])->name('createvisitors');

Route::post('/createVisitors/store',[AlternateDirectorController::class,'store'] )->middleware(['auth'])->name('visitor.store');
//Route::get('/createVisitors/update/{$id}',[AlternateDirectorController::class,'update'] )->middleware(['auth'])->name('visitor.update');
Route::post('/createVisitors/delete/{id}',[AlternateDirectorController::class,'destroy'] )->middleware(['auth'])->name('visitor.destroy');


require __DIR__.'/auth.php';

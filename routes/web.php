<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BottleController;

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

/*
TO-DO WARNING rajouter les {id} au URI nécessaires.
*/
Route::get('',[BottleController::class,'index'])->middleware(['auth'])->name('home');
Route::get('/create',[BottleController::class,'create'])->middleware(['auth'])->name('create');
Route::post('/',[BottleController::class,'store'])->name('store');
Route::get('/edit/{id}',[BottleController::class,'edit'])->middleware(['auth'])->name('edit');
Route::get('/show/{id}',[BottleController::class,'show'])->middleware(['auth'])->name('show');
Route::get('/update/{id}',[BottleController::class,'update'])->middleware(['auth'])->name('update');
Route::get('/delete/',[BottleController::class,'destroy'])->middleware(['auth'])->name('delete');

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/
require __DIR__.'/auth.php';

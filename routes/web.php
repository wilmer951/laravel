<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\principal;
use App\Http\Controllers\crud;

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

Route::get('/home',[principal::class,'index'])->name('home');
Route::get('/producto',[principal::class,'producto'])->name('producto');
Route::get('/producto/creacion',[principal::class,'crear'])->name('producto.crear');
Route::post('/producto/creacion/crear',[principal::class,'store'])->name('producto.store');







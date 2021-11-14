<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControllerProd;


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

Route::view('/','welcome')->name('home');
Route::view('/dashboard','dashboard')->middleware(['auth'])->name('dashboard');

Route::resource('productos', ControllerProd::class)->middleware(['auth']);


require __DIR__.'/auth.php';




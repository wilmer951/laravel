<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD:proyecto1/routes/web.php

use App\Http\Controllers\ControllerProd;

=======
>>>>>>> 3ade6f9a8c4cf675aad9fd62ad7c2c14a793dc0b:routes/web.php

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

<<<<<<< HEAD:proyecto1/routes/web.php
Route::view('/','welcome')->name('home');
Route::view('/dashboard','dashboard')->middleware(['auth'])->name('dashboard');

Route::resource('productos', ControllerProd::class)->middleware(['auth']);


require __DIR__.'/auth.php';



=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 3ade6f9a8c4cf675aad9fd62ad7c2c14a793dc0b:routes/web.php

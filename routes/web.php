<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortafolioController;

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

/*  Estas es un formade retornar vistas que no requieren una gran carga
    como por ejemplo, politica y privacidad, contacto, quienes somos, etc.
*/

Route::view('/', 'home');
Route::view('/about', 'about')->name('about');
Route::get('/portafolio', [PortafolioController::class,'index'])->name('portafolio');
Route::view('/contact', 'contact')->name('contact');















/* Route::get('/', function () {
    return view('home');
})->name('home');
 */

/* Auth::routes(); */
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

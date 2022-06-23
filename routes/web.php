<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contacto\ContactoController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Portafolio\PortafolioController;
use App\Http\Controllers\Team\TeamController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/contacto',[ContactoController::class,'index'])->name('viewcontacto');
Route::get('/blog',[BlogController::class,'index'])->name('viewblog');
Route::get('/portafolio',[PortafolioController::class,'index'])->name('viewportafolio');
Route::get('/equipo',[TeamController::class,'index'])->name('viewteam');

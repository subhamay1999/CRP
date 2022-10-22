<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthComtroller;
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
    return redirect('/login');
});

Route::get('/login',[AuthComtroller::class,'login'])->name('login');
Route::get('/register',[AuthComtroller::class,'register'])->name('register');
Route::post('/loginSubmit',[AuthComtroller::class,'loginSubmit'])->name('loginSubmit');
Route::post('/registerSubmit',[AuthComtroller::class,'registerSubmit'])->name('registerSubmit');
Route::get('/view',[AuthComtroller::class,'view'])->name('view');




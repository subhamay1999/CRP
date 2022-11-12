<?php

use App\Http\Controllers\AuthComtroller;
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
    return redirect('/login');
});
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/logout', [AuthComtroller::class, 'logout'])->name('logout');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/', function () {
        return view('dashboard/dashboard');
    });
    Route::get('/booking', function () {
        return view('booking/booking');
    });
    Route::get('/car', function () {
        return view('car/car');
    });
});

Route::get('/login', [AuthComtroller::class, 'login'])->name('login');
Route::get('/register', [AuthComtroller::class, 'register'])->name('register');
Route::post('/loginSubmit', [AuthComtroller::class, 'loginSubmit'])->name('loginSubmit');
Route::post('/registerSubmit', [AuthComtroller::class, 'registerSubmit'])->name('registerSubmit');
Route::get('/view', [AuthComtroller::class, 'view'])->name('view');

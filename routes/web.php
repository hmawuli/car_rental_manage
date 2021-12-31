<?php

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
    return view('welcome');
});


//admin controller aspect
Route::get('/about', [App\Http\Controllers\AdminController::class, 'about']);
Route::get('/home', [App\Http\Controllers\AdminController::class, 'home']);
Route::get('/cars', [App\Http\Controllers\AdminController::class, 'cars']);
Route::get('/carimage', [App\Http\Controllers\AdminController::class, 'carimage']);
Route::get('/carowner', [App\Http\Controllers\AdminController::class, 'carowner']);
Route::get('/carownercredential', [App\Http\Controllers\AdminController::class, 'carownercredential']);
Route::get('/carrental', [App\Http\Controllers\AdminController::class, 'carrental']);
Route::get('/carreview', [App\Http\Controllers\AdminController::class, 'carreview']);
Route::get('/customer', [App\Http\Controllers\AdminController::class, 'customer']);
Route::get('/customercredential', [App\Http\Controllers\AdminController::class, 'customercredential']);
Route::get('/payment', [App\Http\Controllers\AdminController::class, 'payment']);

// car rental controller aspect that is ths same as the user page
Route::get('/about',[App\Http\Controllers\CarRentalController::class,'about']);
Route::get('/home',[App\Http\Controllers\CarRentalController::class,'home']);
Route::get('/cars',[App\Http\Controllers\CarRentalController::class,'cars']);
Route::get('/carimage',[App\Http\Controllers\CarRentalController::class,'carimage']);
Route::get('/carreview',[App\Http\Controllers\CarRentalController::class,'carreview']);
Route::get('/carrental',[App\Http\Controllers\CarRentalController::class,'carrental']);
Route::get('/customer',[App\Http\Controllers\CarRentalController::class,'customer']);
Route::get('/customercredential',[App\Http\Controllers\CarRentalController::class,'customercredential']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//layouting
// Route::get('/', function () {
//     return view('layouts.layout.master_main');
// });

Route::get('/property-list', function () {
    return view('user.property.property_list');
});

Route::get('/dashboard', function () {
    return view('user.dashboard.dashboard');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/auth/login', [HomeController::class,'login'])->name('auth.login');
Route::get('/auth/register', [HomeController::class,'register'])->name('auth.register');
Route::get('/auth/save', [HomeController::class,'save'])->name('auth.save');

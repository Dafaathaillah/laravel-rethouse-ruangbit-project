<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
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

//Admin



//User
Route::get('/', function () {
    return view('user.dashboard.dashboard');
});

Route::get('/dashboard', function () {
    return view('user.dashboard.dashboard');
});


//property
Route::resource('property', PropertyController::class);

//agency
Route::get('/agency', function () {
    return view('user.agency.agency');
});

Route::get('/agency-detail', function () {
    return view('user.agency.agency_detail');
});


//about  us
Route::get('/about-us', function () {
    return view('user.about_us.about-us');
});


//blog news
Route::get('/blog-news', function () {
    return view('user.blog_news.blog');
});


//agents
Route::get('/agents-list', function () {
    return view('user.agents.agents');
});

Route::get('/agents-detail', function () {
    return view('user.agents.agents_detail');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

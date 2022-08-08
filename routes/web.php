<?php

use Illuminate\Support\Facades\Auth;
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

//Admin



//User
Route::get('/', function () {
    return view('user.dashboard.dashboard');
});

Route::get('/dashboard', function () {
    return view('user.dashboard.dashboard');
});

Route::get('/property-list', function () {
    return view('user.property.property_list');
});

Route::get('/property-detail', function () {
    return view('user.property.property_detail');
});

Route::get('/agency', function () {
    return view('user.agency.agency');
});

Route::get('/agency-detail', function () {
    return view('user.agency.agency_detail');
});

Route::get('/about-us', function () {
    return view('user.about_us.about-us');
});

Route::get('/blog-news', function () {
    return view('user.blog_news.blog');
});

Route::get('/agents-list', function () {
    return view('user.agents.agents');
});

Route::get('/agents-detail', function () {
    return view('user.agents.agents_detail');
});

//admin
Route::get('/admin-dashboard', function () {
    return view('layouts\layout_admin\master_admin');
});

Route::get('/admin-dashboard', function () {
    return view('admin\dashboard\dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

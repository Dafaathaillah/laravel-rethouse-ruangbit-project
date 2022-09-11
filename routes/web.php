<?php

use App\Http\Controllers\DashboardController;
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
// Route::get('/', function () {
//     return view('user.dashboard.dashboard');
// });
Route::get('/', [DashboardController::class,'index']);

Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');


//property
// Route::resource('property', PropertyController::class);
Route::get('/property', [PropertyController::class,'index'])->name('property.index');
Route::get('/property/create', [PropertyController::class,'create'])->name('property.create');
Route::post('/property/store', [PropertyController::class,'store'])->name('property.store');
Route::get('/property/show/{id}', [PropertyController::class,'show'])->name('property.show');
Route::get('/property/edit{id}', [PropertyController::class,'edit'])->name('property.edit');
Route::put('/property/update{id}', [PropertyController::class,'update'])->name('property.update');
Route::get('/property/delete/{id}', [PropertyController::class,'destroy'])->name('property.destroy');

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

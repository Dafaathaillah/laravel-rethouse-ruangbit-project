<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\ManageAdsController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\ManageAgencyController;
use App\Http\Controllers\ManageTermController;
use App\Http\Controllers\ManageRoleController;
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
Route::get('/', function () {
    return view('user.dashboard.dashboard');
});
// Route::get('/dashboardadmin', function () {
//     return view('admin.dashboard.dashboard');
// });
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/auth/login', [HomeController::class,'login'])->name('auth.login');
Route::get('/auth/register', [HomeController::class,'register'])->name('auth.register');
Route::get('/admin', [DashboardAdminController::class,'index'])->name('admin.dashboard.index');
Route::get('/admin/users', [ManageUserController::class,'index'])->name('admin.user.index');
Route::get('/admin/users/show/{id}', [ManageUserController::class,'show'])->name('admin.user.show');
Route::get('/admin/users/edit{id}', [ManageUserController::class,'edit'])->name('admin.user.edit');
// Route::get('/admin/users/delete/{id}', [ManageUserController::class,'destroy'])->name('admin.user.delete');
Route::get('/admin/role', [ManageRoleController::class,'index'])->name('admin.role.index');
Route::get('/admin/advertisements', [ManageAdsController::class,'index'])->name('admin.ads.index');
Route::get('/admin/agencies', [ManageAgencyController::class,'index'])->name('admin.agency.index');
Route::get('/admin/term&condition', [ManageTermController::class,'index'])->name('admin.term.index');
Route::post('/auth/save', [HomeController::class,'save'])->name('auth.save');
Route::post('/auth/check', [HomeController::class,'check'])->name('auth.check');




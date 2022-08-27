<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\ManageAdsController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\ManageAgencyController;
use App\Http\Controllers\ManageLogoController;
use App\Http\Controllers\ManageTermController;
use App\Http\Controllers\ManageRoleController;
use App\Models\ManageLogo;
use Illuminate\Support\Manager;

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
Route::put('/admin/users/update{id}', [ManageUserController::class,'update'])->name('admin.user.update');
Route::get('/admin/users/delete/{id}', [ManageUserController::class,'destroy'])->name('admin.user.destroy');
Route::get('/admin/roles', [ManageRoleController::class,'index'])->name('admin.role.index');
Route::get('/admin/roles/create', [ManageRoleController::class,'create'])->name('admin.role.create');
Route::post('/admin/roles/store', [ManageRoleController::class,'store'])->name('admin.role.store');
Route::get('/admin/roles/show/{id}', [ManageRoleController::class,'show'])->name('admin.role.show');
Route::get('/admin/roles/edit{id}', [ManageRoleController::class,'edit'])->name('admin.role.edit');
Route::put('/admin/roles/update{id}', [ManageRoleController::class,'update'])->name('admin.role.update');
Route::get('/admin/roles/delete/{id}', [ManageRoleController::class,'destroy'])->name('admin.role.destroy');
Route::get('/admin/agencies', [ManageAgencyController::class,'index'])->name('admin.agency.index');
Route::get('/admin/agencies/create', [ManageAgencyController::class,'create'])->name('admin.agency.create');
Route::post('/admin/agencies/store', [ManageAgencyController::class,'store'])->name('admin.agency.store');
Route::get('/admin/agencies/show/{id}', [ManageAgencyController::class,'show'])->name('admin.agency.show');
Route::get('/admin/agencies/edit{id}', [ManageAgencyController::class,'edit'])->name('admin.agency.edit');
Route::put('/admin/agencies/update{id}', [ManageAgencyController::class,'update'])->name('admin.agency.update');
Route::get('/admin/agencies/delete/{id}', [ManageAgencyController::class,'destroy'])->name('admin.agency.destroy');
Route::get('/admin/advertisements', [ManageAdsController::class,'index'])->name('admin.ads.index');
Route::get('/admin/agencies', [ManageAgencyController::class,'index'])->name('admin.agency.index');
Route::get('/admin/term&condition', [ManageTermController::class,'index'])->name('admin.term.index');
Route::post('/auth/save', [HomeController::class,'save'])->name('auth.save');
Route::post('/auth/check', [HomeController::class,'check'])->name('auth.check');

Route::resource('logo', ManageLogoController::class);

Route::get('/admin/logo', [ManageLogoController::class,'index'])->name('admin.logo.index');
Route::get('/admin/logo/create', [ManageLogoController::class,'create'])->name('admin.logo.create');
Route::post('/admin/logo/store', [ManageLogoController::class,'store'])->name('admin.logo.store');
Route::get('/admin/delete/logo/{id}', [ManageLogoController::class,'destroy'])->name('admin.logo.delete');

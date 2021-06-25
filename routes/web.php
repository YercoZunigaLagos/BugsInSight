<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;

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
    return view('auth/login');
});

Auth::routes(['verify' => true]);

Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('registrar');

//para el login y link de dashboard
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('home');
});

// para usuarios
Route::group(['middleware' => ['auth', 'role:user']], function() {
    Route::get('/dashboard/proyectos', 'App\Http\Controllers\DashboardController@proyectos')->name('misProyectos');
});

// for managers
Route::group(['middleware' => ['auth', 'role:manager']], function() {
    Route::get('/dashboard/postcreate', 'App\Http\Controllers\DashboardController@postcreate')->name('dashboard.postcreate');
});



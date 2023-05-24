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
    return redirect('login');
});

Auth::routes([
    'register' => false,
]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::group(['middleware' => ['admin']], function () {
    Route::resource('users', App\Http\Controllers\Admin\UserController::class)->except(['show']);
    Route::get('get-prodi', [App\Http\Controllers\Admin\UserController::class, 'getProdi'])->name('get-prodi');
    Route::get('get-fakultas', [App\Http\Controllers\Admin\UserController::class, 'getFakultas'])->name('get-fakultas');
});

Route::group(['middleware' => ['univ']], function() {
    Route::get('feeder-lulusan', [App\Http\Controllers\FeederController::class, 'lulusan'])->name('feeder-lulusan');
});



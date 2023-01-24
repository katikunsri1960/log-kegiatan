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
    return redirect()->route('login');
});

Auth::routes([
    'register' => false,
]);

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    Route::group(['middleware' => ['admin']], function () {
        Route::resource('users', App\Http\Controllers\Admin\UserController::class)->except(['show']);
        Route::resource('projects', App\Http\Controllers\ProjectController::class);
    });

    Route::group(['middleware' => ['user']], function () {
        Route::resource('my-projects', App\Http\Controllers\MyProjectController::class)->only(['index', 'show']);
        Route::resource('project-task', App\Http\Controllers\ProjectTaskController::class);
    });
});




<?php

use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\UsersController;
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
    return view('home');
});

Route::post('/login', [AdminLoginController::class, 'login']);

Route::namespace('Admin')
    ->prefix('admin')
    ->group(function () {
        Route::get('/login', [AdminLoginController::class, 'index'])->name('login');
    });

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('admin/criar-usuario', [UsersController::class, 'create'])->name('admin.create');
});

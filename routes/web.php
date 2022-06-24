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
    return view('dashboard.layouts.dashboard');
});

Route::get('table', function () {
    return view('dashboard.layouts.table');
})->name('table');

Route::get('updateProfile', function () {
    return view('dashboard.layouts.updateProfile');
})->name('updateProfile');

Route::get('changePassword', function () {
    return view('dashboard.layouts.changePassword');
})->name('changePassword');

Route::get('login', function () {
    return view('dashboard.layouts.userLogin');
})->name('login');

Route::get('userRegister', function () {
    return view('dashboard.layouts.userRegister');
})->name('userRegister');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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



Route::get('table', function () {
    return view('dashboard.layouts.table');
})->name('table');

Route::get('updateProfile', function () {
    return view('dashboard.layouts.updateProfile');
})->name('updateProfile');

Route::get('changePassword', function () {
    return view('dashboard.layouts.changePassword');
})->name('changePassword');




Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('custom-login', [LoginController::class, 'customLogin'])->name('customlogin');
Route::get('userRegister', [LoginController::class, 'registration'])->name('userRegister');
Route::post('user-registration', [LoginController::class, 'customRegistration'])->name('user-registration');
Route::get('signout', [LoginController::class, 'signOut'])->name('signout');
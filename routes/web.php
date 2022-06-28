<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Auth;
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




Route::get('updateProfile', function () {
    return view('dashboard.layouts.updateProfile');
})->name('updateProfile');

Route::get('changePassword', function () {
    return view('dashboard.layouts.changePassword');
})->name('changePassword');





Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('custom-login', [LoginController::class, 'customLogin'])->name('customlogin');
Route::get('userRegister', [LoginController::class, 'registration'])->name('userRegister');
Route::post('user-registration', [LoginController::class, 'customRegistration'])->name('user-registration');
Route::get('signout', [LoginController::class, 'signOut'])->name('signout');
Route::post('changePasswordPost', [LoginController::class, 'changePasswordPost'])->name('changePasswordPost');



Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);

    Route::get('show-logo',[LogoController::class, 'showLogo'])->name('show-logo');
    Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
    Route::get('logo-index',[LogoController::class, 'show'])->name('logo-index');
    Route::get('create-logo',[LogoController::class, 'create'])->name('create-logo');
    Route::post('store-image',[LogoController::class, 'store'])->name('store-image');

    Route::get('destroy-logo\{id}',[LogoController::class, 'destroy'])->name('destroy-logo');
    Route::get('edit-logo\{id}',[LogoController::class, 'edit'])->name('edit-logo');
    Route::post('update-logo',[LogoController::class, 'update'])->name('update-logo');
});
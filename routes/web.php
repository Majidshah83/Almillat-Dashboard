<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TextnomialController;
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






Route::get('changePassword', function () {

    return view('dashboard.layouts.changePassword');
})->name('changePassword');





Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('custom-login', [LoginController::class, 'customLogin'])->name('customlogin');
Route::get('userRegister', [LoginController::class, 'registration'])->name('userRegister');
Route::post('user-registration', [LoginController::class, 'customRegistration'])->name('user-registration');
Route::get('signout', [LoginController::class, 'signOut'])->name('signout');
Route::get('changePassword',[LoginController::class, 'changePassword'])->name('changePassword');
Route::post('changePasswordPost', [LoginController::class, 'changePasswordPost'])->name('changePasswordPost');



Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);

    Route::get('show-logo',[LogoController::class, 'showLogo'])->name('show-logo');
    Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
    Route::get('logo-index',[LogoController::class, 'index'])->name('logo-index');
    Route::get('create-logo',[LogoController::class, 'create'])->name('create-logo');
    Route::post('store-image',[LogoController::class, 'store'])->name('store-image');

    Route::get('destroy-logo\{id}',[LogoController::class, 'destroy'])->name('destroy-logo');
    Route::get('edit-logo\{id}',[LogoController::class, 'edit'])->name('edit-logo');
    Route::post('update-logo',[LogoController::class, 'update'])->name('update-logo');

    Route::get('get-profile',[ProfileController::class, 'getprofile'])->name('get-profile');
    Route::post('update-profile',[ProfileController::class, 'updateProfile'])->name('update-profile');

    // seo tags
    Route::get('tag-index',[TagController::class, 'index'])->name('tag-index');
    Route::get('create-tag',[TagController::class, 'create'])->name('create-tag');
    Route::post('store-tag',[TagController::class, 'store'])->name('store-tag');
    Route::get('tag-edit/{id}',[TagController::class, 'edit'])->name('tag-edit');
    Route::post('update-tag',[TagController::class, 'update'])->name('update-tag');
    Route::get('tag-delete/{id}',[TagController::class, 'destroy'])->name('tag-delete');


 //  blogs
      Route::get('blog-index',[BlogController::class, 'index'])->name('blog-index');
     Route::post('store-blog',[BlogController::class, 'store'])->name('store-blog');
     Route::get('blog-create',[BlogController::class, 'create'])->name('blog-create');
      Route::get('edit-blogo/{id}',[BlogController::class, 'edit'])->name('edit-blogo');
      Route::post('update-blog',[BlogController::class, 'update'])->name('update-blog');
      Route::get('destroy-blogo/{id}',[BlogController::class, 'destroy'])->name('destroy-blogo');


    //  textnomial
     Route::get('textnomial-index',[TextnomialController::class, 'index'])->name('textnomial-index');
     Route::post('store-textnomial',[TextnomialController::class, 'store'])->name('store-textnomial');
     Route::get('create-textnomial',[TextnomialController::class, 'create'])->name('create-textnomial');
    Route::get('destroy-textnomial/{id}',[TextnomialController::class, 'destroy'])->name('destroy-textnomial');
    Route::get('textnomi-list/changeStatus', [TextnomialController::class, 'changeSatatus'])->name('textnomi-list/changeStatus');

    //  Service

 Route::get('service-index',[ServiceController::class, 'index'])->name('service-index');
     Route::post('store-service',[ServiceController::class, 'store'])->name('store-service');
     Route::get('create-service',[ServiceController::class, 'create'])->name('create-service');
      Route::get('edit-service/{id}',[ServiceController::class, 'edit'])->name('edit-service');
      Route::post('update-service',[ServiceController::class, 'update'])->name('update-service');
      Route::get('destroy-service/{id}',[ServiceController::class, 'destroy'])->name('destroy-service');

});
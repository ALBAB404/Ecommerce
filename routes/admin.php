<?php
use App\Http\Controllers\{
    adminAuthenticateController,
    AdminController,
    CategoryController
};

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function(){
    route::get('login', function(){
        return view('backend.admin.login');
    })->name('login');
    route::get('register', function(){
        return view('backend.admin.register');
    })->name('register');
    route::get('forget-password', function(){
        return view('backend.admin.forgetpassword');
    })->name('forgetPassword');
    route::get('dashboard', function(){
        return view('backend.admin.dashboard');
    })->name('dashboard');

    // Admin

    Route::controller(AdminController::class)->middleware('can:isSuper_admin')->group(function(){
        route::get('/', 'index')->name('index');
        route::get('/create', 'create')->name('create');
        route::post('/store', 'store')->name('store');
        route::get('/show/{admin}', 'show')->name('show');
        route::get('/edit/{admin}', 'edit')->name('edit');
        route::post('/update/{admin}', 'update')->name('update');
        route::post('/delete/{admin}', 'destroy')->name('delete');
    });

    // Category

    Route::controller(CategoryController::class)->name('category.')->prefix('category')->group(function(){
        route::get('/all', 'all')->name('all');
        route::get('/', 'create')->name('create');
        route::post('/store', 'store')->name('store');
    });




    // authentication

    route::post('authenticate', [adminAuthenticateController::class, 'authenticate'])->name('authenticate');
    route::post('logout', [adminAuthenticateController::class, 'logout'])->name('logout');

});
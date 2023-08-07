<?php
use App\Http\Controllers\{
    adminAuthenticateController,
    AdminController,
    CategoryController,
    ColorController,
    ProductController,
    SizeController,
    SubcategoryController
};

use App\Http\Controllers\ProfileController;
use App\Models\Subcategory;
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
        route::get('/index', 'index')->name('index');
        route::get('/', 'create')->name('create');
        route::post('/store', 'store')->name('store');
        route::get('/{category}', 'show')->name('show');
        route::post('/update/{category}', 'update')->name('update');
        Route::delete('/delete/{category}', 'delete')->name('delete');

    });

    // SubCategory

    Route::controller(SubcategoryController::class)->name('sub-category.')->prefix('sub-category')->group(function(){
        route::get('/index', 'index')->name('index');
        route::get('/', 'create')->name('create');
        route::post('/store', 'store')->name('store');
        route::get('/{subCategory}', 'show')->name('show');
        route::get('/edit/{subCategory}', 'edit')->name('edit');
        route::post('/update/{subCategory}', 'update')->name('update');
        Route::delete('/delete/{subCategory}', 'delete')->name('delete');

    });


    // Color

    Route::controller(ColorController::class)->name('color.')->prefix('color')->group(function(){
        route::get('/index', 'index')->name('index');
        route::get('/', 'create')->name('create');
        route::post('/store', 'store')->name('store');
        route::get('/{color}', 'show')->name('show');
        route::post('/update/{color}', 'update')->name('update');
        Route::delete('/delete/{color}', 'delete')->name('delete');

    });


    // Size

    Route::controller(SizeController::class)->name('size.')->prefix('size')->group(function(){
        route::get('/index', 'index')->name('index');
        route::get('/', 'create')->name('create');
        route::post('/store', 'store')->name('store');
        route::get('/{size}', 'show')->name('show');
        route::post('/update/{size}', 'update')->name('update');
        Route::delete('/delete/{size}', 'delete')->name('delete');

    });

        // Products

        Route::controller(ProductController::class)->name('product.')->prefix('product')->group(function(){
            route::get('/', 'index')->name('index');
            route::get('/create', 'create')->name('create');
            route::post('/', 'store')->name('store');
            route::get('/{product}', 'show')->name('show');
            route::get('/edit/{product}', 'edit')->name('edit');
            route::post('/update/{product}', 'update')->name('update');
            Route::post('/delete/{product}', 'delete')->name('delete');

        });

    // authentication

    route::post('authenticate', [adminAuthenticateController::class, 'authenticate'])->name('authenticate');
    route::post('logout', [adminAuthenticateController::class, 'logout'])->name('logout');

});

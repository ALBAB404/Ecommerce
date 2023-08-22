<?php
use App\Http\Controllers\{
    adminAuthenticateController,
    AdminController,
    BannerController,
    CategoryController,
    ColorController,
    InstragramfeedController,
    OfferDealController,
    ProductController,
    SizeController,
    SubcategoryController,

};
use App\Http\Controllers\frontend\{
    checkoutController,
    singleProductController,
    homeController,
    shopController,
    CouponController,
};
use App\Http\Controllers\ProfileController;
use App\Models\offerDeal;
use App\Models\product;
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


    // Coupon

    Route::controller(CouponController::class)->name('coupon.')->prefix('coupon')->group(function(){
        route::get('/index', 'index')->name('index');
        route::get('/', 'create')->name('create');
        route::post('/store', 'store')->name('store');
        route::get('/{coupon}', 'show')->name('show');
        route::post('/update/{coupon}', 'update')->name('update');
        Route::delete('/delete/{coupon}', 'delete')->name('delete');
        Route::post('/applyCoupon', 'applyCoupon')->name('applyCoupon');

    });

     // CheckOut

        Route::controller(checkoutController::class)->name('checkout.')->prefix('checkout')->group(function(){
            route::get('/index', 'index')->name('index');
            route::get('/', 'create')->name('create');
            route::post('/store', 'store')->name('store');
            route::get('/{checkout}', 'show')->name('show');
            route::post('/update/{checkout}', 'update')->name('update');
            Route::delete('/delete/{checkout}', 'delete')->name('delete');
            Route::post('/applyCoupon', 'applyCoupon')->name('applyCoupon');

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

        //Banner
        Route::controller(BannerController::class)->name('banner.')->prefix('banner')->group(function(){
            route::get('/', 'index')->name('index');
            route::get('/create', 'create')->name('create');
            route::post('/', 'store')->name('store');
            route::get('/show/{banner}', 'show')->name('show');
            route::post('/update/{banner}', 'update')->name('update');
            Route::delete('/delete/{banner}', 'delete')->name('delete');

        });

        //offer Deal
        Route::controller(OfferDealController::class)->name('offerDeal.')->prefix('offerDeal')->group(function(){
            route::get('/', 'index')->name('index');
            route::get('/create', 'create')->name('create');
            route::post('/', 'store')->name('store');
            route::get('/show/{offerDeal}', 'show')->name('show');
            route::post('/update/{offerDeal}', 'update')->name('update');
            Route::delete('/delete/{offerDeal}', 'delete')->name('delete');

        });
        //instragram Deal
        Route::controller(InstragramfeedController::class)->name('instragramfeed.')->prefix('instragramfeed')->group(function(){
            route::get('/', 'index')->name('index');
            route::get('/create', 'create')->name('create');
            route::post('/', 'store')->name('store');
            route::get('/show/{instragramfeed}', 'show')->name('show');
            route::post('/update/{instragramfeed}', 'update')->name('update');
            Route::delete('/delete/{instragramfeed}', 'delete')->name('delete');

        });

    // authentication

    route::post('authenticate', [adminAuthenticateController::class, 'authenticate'])->name('authenticate');
    route::post('logout', [adminAuthenticateController::class, 'logout'])->name('logout');

});

// frontend Routes All Defind Here

Route::get('/',[homeController::class, 'home'])->name('home');
Route::get('/product/{product}',[singleProductController::class, 'singleProduct'])->name('single_product');
Route::get('/shop-product/{product}',[singleProductController::class, 'ActiveProduct'])->name('ActiveProduct');
Route::get('/shop-page',[shopController::class, 'shopPage'])->name('shopPage');
Route::get('/shop-page/{id}',[shopController::class, 'getProduct'])->name('getProduct');
Route::get('/shop-category/{id}',[shopController::class, 'shopCategory'])->name('shopCategory');
Route::get('/shop-size/{id}',[shopController::class, 'shopSize'])->name('shopSize');
Route::get('/shop-price/{lowPrice}/{highPrice}', [ShopController::class, 'shopPrice'])->name('shopPrice');
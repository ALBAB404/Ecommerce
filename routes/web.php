<?php

use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\customerAuthController;
use App\Http\Controllers\globalController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/yoyo', function () {
    return view('backend.admin.forgetpassword');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('get-all-subCategory/{id}',[globalController::class, 'getData']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';


// frontend route
Route::prefix('customer')->name('customer.')->controller(customerAuthController::class)->group(function () {
    Route::get('dashboard','dashboard')->name('dashboard')->middleware(['auth:customer','auth.session']);
    Route::get('login','login')->name('login')->middleware('guest:customer');
    Route::get('register','register')->name('register')->middleware('guest:customer');
    Route::post('logout','logout')->name('logout')->middleware('auth:customer');
    Route::post('authenticate','authenticate')->name('authenticate')->middleware('guest:customer');
    Route::post('store','store')->name('store')->middleware('guest:customer');
});


// frontend Cart route
Route::prefix('cart')->name('cart.')->controller(CartController::class)->middleware('auth:customer')->group(function () {
    route::get('/index','index');
    route::get('/','create')->name('create');
   route::post('/','store');
   route::post('/update/{id}','update');
   route::delete('/destroy/{id}','destroy');
});
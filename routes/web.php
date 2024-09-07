<?php

use Illuminate\Support\Facades\Route;
use \Mcamara\LaravelLocalization\Traits\LoadsTranslatedCachedRoutes;
use App\Http\Controllers\website\{MainController,ProductsController};
use App\Http\Controllers\dashboard\DashboardMainController;
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

Auth::routes();

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {
        Route::get('/', function () {
            return view('welcome');
        });

        Route::get('/', [App\Http\Controllers\website\MainController::class, 'home'])->name('home');
        Route::get('/about', [App\Http\Controllers\website\MainController::class, 'about'])->name('about');
        Route::get('/shop', [App\Http\Controllers\website\ProductsController::class, 'shop'])->name('shop');
        Route::get('/contact', [App\Http\Controllers\website\MainController::class, 'contact'])->name('contact');
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home_auth');

         Route::prefix('dashboard')->middleware(['auth', 'dashboard'])->group(function () {
            Route::get('/', [DashboardMainController::class, 'home'])->name('dashboard');
        });

    });

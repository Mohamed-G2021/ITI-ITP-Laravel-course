<?php

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

use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'showProducts']);

Route::get('/products/{id}', [SiteController::class, 'showProductDetails']);


Route::get('/about-us', [SiteController::class, 'showAboutUsPage']);

Route::get('/contact-us', [SiteController::class, 'showContactUsPage']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

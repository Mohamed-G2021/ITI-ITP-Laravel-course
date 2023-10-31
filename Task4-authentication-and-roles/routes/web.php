<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
        return view('welcome');
});
Route::get('/about-us', [ProductController::class, 'showAboutUsPage']);
Route::get('/contact-us', [ProductController::class, 'showContactUsPage']);
Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('products/{id}/delete', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::put('products/{id}/update', [ProductController::class, 'update'])->name('products.update');


Route::resource('categories', CategoryController::class);

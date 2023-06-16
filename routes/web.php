<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Attributes\CreateAttributes;
use App\Http\Livewire\Attributes\UpdateAttributes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Products\CreateProducts;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');

    // Categories routes
    Route::get('/categories/{category}/delete', [CategoryController::class, 'delete'])->name('categories.delete');
    Route::resource('categories', CategoryController::class);

    // Attributes routes
    Route::post('/categories/{category}/attributes', [CreateAttributes::class, 'store'])->name('attributes.store');
    Route::patch('/attributes/{attribute}', [UpdateAttributes::class, 'update'])->name('attributes.update');
    Route::resource('categories.attributes', AttributeController::class)->except('create', 'store')->shallow();

    // Products routes
    Route::post('/categories/{category}/products', [CreateProducts::class, 'store'])->name('products.store');
    Route::resource('categories.products', ProductController::class)->except('create', 'store')->shallow();
});


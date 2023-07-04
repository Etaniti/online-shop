<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductVariantController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Attributes\CreateAttributes;
use App\Http\Livewire\Attributes\DeleteAttributes;
use App\Http\Livewire\Attributes\UpdateAttributes;
use App\Http\Livewire\Products\CreateProducts;
use App\Http\Livewire\ProductVariantFeatures\UpdateProductVariantFeatures;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    Route::delete('/attributes/{attribute}', [DeleteAttributes::class, 'delete'])->name('attributes.delete');
    Route::resource('categories.attributes', AttributeController::class)->except('create', 'store')->shallow();

    // Products routes
    Route::post('/categories/{category}/products', [CreateProducts::class, 'store'])->name('products.store');
    Route::get('/products/{product}/delete', [ProductController::class, 'delete'])->name('products.delete');
    Route::resource('categories.products', ProductController::class)->except('create', 'store')->shallow();

    // Product Variants routes
    Route::get('/product-variants/{product_variant}/delete', [ProductVariantController::class, 'delete'])->name('product-variants.delete');
    Route::resource('products.product-variants', ProductVariantController::class)->shallow();

    // Product Variant Features routes
//    Route::post('/product-variants/{product_variant}/product-variant-features', [CreateProductVariantFeatures::class, 'store'])->name('product-variant-features.store');
    Route::patch('/product-variant-features/{product_variant_feature}', [UpdateProductVariantFeatures::class, 'update'])->name('product-variant-features.update');
});


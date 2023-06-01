<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SubCategoryController;
use GuzzleHttp\Middleware;
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

Auth::routes();

Route::get('/', [FrontController::class, 'getDashboard'])->name('front.index');
Route::get('about', [FrontController::class, 'getAbout'])->name('front.about');
Route::get('contact-us', [FrontController::class, 'getContact'])->name('front.contact');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {

    /*category  */
    Route::get(
        '/',
        function () {
            return view('admin.main');
        }
    );
    Route::get('category/index', [CategoryController::class, 'index'])->name('category.index');
    Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::get('category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    Route::put('category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    /* sub category */
    Route::get('subcategory/index', [SubCategoryController::class, 'index'])->name('subcategory.index');
    Route::get('subcategory/create', [SubCategoryController::class, 'create'])->name('subcategory.create');
    Route::post('subcategory/store', [SubCategoryController::class, 'store'])->name('subcategory.store');
    Route::get('subcategory/edit/{id}', [SubCategoryController::class, 'edit'])->name('subcategory.edit');
    Route::get('subcategory/delete/{id}', [SubCategoryController::class, 'delete'])->name('subcategory.delete');
    Route::put('subcategory/update/{id}', [SubCategoryController::class, 'update'])->name('subcategory.update');
    /* product */

    Route::get('product/index', [ProductController::class, 'index'])->name('product.index');
    Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::get('product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
    Route::put('product/update/{id}', [ProductController::class, 'update'])->name('product.update');


    /*  BANNER */
    Route::get('banner/index', [BannerController::class, 'index'])->name('banner.index');
    Route::get('banner/create', [BannerController::class, 'create'])->name('banner.create');
    Route::post('banner/store', [BannerController::class, 'store'])->name('banner.store');
    Route::get('banner/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
    Route::get('banner/delete/{id}', [BannerController::class, 'delete'])->name('banner.delete');
    Route::put('banner/update/{id}', [BannerController::class, 'update'])->name('banner.update');

    /*  REview */
    Route::get('review/index', [ReviewController::class, 'index'])->name('review.index');
    Route::get('review/create', [ReviewController::class, 'create'])->name('review.create');
    Route::post('review/store', [ReviewController::class, 'store'])->name('review.store');

});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/cate', function () {
    return view('frontend.category');
});
Route::get('/Detail', function () {
    return view('frontend.article');
});

Route::get('/dashboard', function () {
    return view('backend/layouts.app');
});


Route::get('category/index', [CategoryController::class, 'index'])->name('category.index');
Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::get('category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('category/show/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::get('category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');


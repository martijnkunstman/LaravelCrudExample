<?php

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
    return view('welcome');
});

Route::get('/category', [ CategoryController::class, 'index' ])->name('category');
Route::get('/category/create', [ CategoryController::class, 'create' ])->name('category.create');
Route::post('/category/store', [ CategoryController::class, 'store' ])->name('category.store');
Route::get('/category/show', [ CategoryController::class, 'show' ])->name('category.show');
Route::get('/category/edit', [ CategoryController::class, 'edit' ])->name('category.edit');
Route::post('/category/update', [ CategoryController::class, 'update' ])->name('category.update');
Route::get('/category/destroy', [ CategoryController::class, 'destroy' ])->name('category.destroy');

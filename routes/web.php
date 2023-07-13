<?php

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

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\Admin\EstateController;
Route::controller(EstateController::class)->prefix('admin')->group(function() {
    Route::get('estate/create', 'add');
    Route::post('estate/create', 'create');
    Route::get('estate/edit', 'edit');
    Route::post('estate/edit','update');
});
use App\Http\Controllers\Admin\NewsController;
Route::controller(NewsController::class)->prefix('admin')->group(function() {
    Route::get('news/create', 'add');
    Route::post('news/create', 'create');
    Route::get('news/edit', 'edit');
    Route::post('news/edit','update');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(EstateController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('estate/create', 'add')->name('estate.add');
    Route::post('estate/create', 'create')->name('estate.create');
});

Route::controller(NewsController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('news/create', 'add')->name('news.add');
    Route::post('news/create', 'create')->name('news.create');
});
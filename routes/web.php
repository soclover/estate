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
});
use App\Http\Controllers\Admin\NewsController;
Route::controller(NewsController::class)->prefix('admin')->group(function() {
    Route::get('news/create', 'add');
    Route::post('news/create', 'create');
    Route::get('news/edit', 'edit');
    Route::post('news/edit','update');
});
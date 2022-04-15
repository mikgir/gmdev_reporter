<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IndexController as AdminController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\HomeController;
use App\View\Components\Form\Customer;
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

Route::get('/', [HomeController::class, 'index'])
    ->name('home');
Route::get('/news', [HomeController::class, 'showAll'])
    ->name('news');
Route::get('/news/{id}', [HomeController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');
Route::get('/author', [AuthorController::class, 'index'])
    ->name('author');
Route::get('/author/{id}', [AuthorController::class, 'show'])
    ->where('id', '\d+')
    ->name('author.show');


//Admin routes
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('admin', AdminController::class)
        ->name('index');
    Route::resource('customer', Customer::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('news', NewsController::class);
    Route::resource('order', OrderController::class);
});

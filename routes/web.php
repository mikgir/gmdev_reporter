<?php

use App\Http\Controllers\Account\IndexController as AccountController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IndexController as AdminController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ParserController;
use App\Http\Controllers\Admin\SourceController;
use App\Http\Controllers\Auth\SocialController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;

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

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'account', 'as' => 'account.'], function () {
        Route::get('/', AccountController::class)
            ->name('index');
        //Logout
        Route::get('/logout', function () {
            Auth::logout();
            return redirect()->route('home');
        })->name('logout');
    });
    //Admin routes
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/admin', AdminController::class)
            ->name('index');
        Route::resource('categories', CategoryController::class);
        Route::resource('news', NewsController::class);
        Route::resource('source', SourceController::class);
        Route::get('parser', ParserController::class)
            ->name('parser');
    });
});


Auth::routes();
// Social routes
Route::group(['middleware' => 'guest'], function () {
    Route::get('/auth/{network}/redirect', [SocialController::class, 'index'])
        ->where('network', '\w+')
        ->name('auth.redirect');
    Route::get('/auth/{network}/callback', [SocialController::class, 'callback'])
        ->where('network', '\w+')
        ->name('auth.callback');
});
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    Lfm::routes();
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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


Route::get('/', '\App\Http\Controllers\Controller@welcome');

/*
Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth'])->name('admin');
*/
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth', 'as' =>'admin.'], function () {
    Route::get('/', '\App\Http\Controllers\Admin\IndexController@index')->name('dashboard');

    Route::get('/blog', '\App\Http\Controllers\Admin\BlogPostController@index')->name('blog.index');
    Route::get('/blog/create', '\App\Http\Controllers\Admin\BlogPostController@create')->name('blog.create');
    Route::post('/blog/create', '\App\Http\Controllers\Admin\BlogPostController@store')->name('blog.store');
    Route::get('/blog/{blogPost}', '\App\Http\Controllers\Admin\BlogPostController@show')->name('blog.show');
    Route::get('/blog/{blogPost}/edit', '\App\Http\Controllers\Admin\BlogPostController@edit')->name('blog.edit');
    Route::put('/blog/{blogPost}/edit', '\App\Http\Controllers\Admin\BlogPostController@update')->name('blog.update');
    Route::delete('/blog/{blogPost}', '\App\Http\Controllers\Admin\BlogPostController@destroy')->name('blog.destroy');

    Route::get('/user', '\App\Http\Controllers\Admin\UserController@index')->name('user.index');
    Route::get('/user/create', '\App\Http\Controllers\Admin\UserController@create')->name('user.create');
    Route::post('/user/create', '\App\Http\Controllers\Admin\UserController@store')->name('user.store');
    Route::get('/user/{user}', '\App\Http\Controllers\Admin\UserController@show')->name('user.show');
    Route::get('/user/{user}/edit', '\App\Http\Controllers\Admin\UserController@edit')->name('user.edit');
    Route::put('/user/{user}/edit', '\App\Http\Controllers\Admin\UserController@update')->name('user.update');
    Route::delete('/user/{user}', '\App\Http\Controllers\Admin\UserController@destroy')->name('user.destroy');

});

Route::get('/blog', '\App\Http\Controllers\BlogPostController@index')->name('blog.index');
Route::get('/blog/{blogPost}', '\App\Http\Controllers\BlogPostController@show')->name('blog.show');

require __DIR__.'/auth.php';

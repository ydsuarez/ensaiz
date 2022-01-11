<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/menu', 'App\Http\Controllers\MenuController@index')->name('menu');

Route::get('/gallery', 'App\Http\Controllers\GalleryController@index')->name('gallery');

Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about');

Route::post('/contact', 'App\Http\Controllers\ContactController@store')->name('contact');

Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});




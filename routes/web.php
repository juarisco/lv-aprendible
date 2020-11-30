<?php

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

use Illuminate\Support\Facades\DB;

// DB::listen(function ($query) {
//     var_dump($query->sql);
// });

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');

Route::resource('portafolio', 'ProjectController')
    ->parameters(['portafolio' => 'project'])
    ->names('projects');

Route::get('categories/{category}', 'CategoryController@show')->name('categories.show');

Route::view('/contacto', 'contact')->name('contact');

Route::post('contact', 'MessageController@store')->name('messages.store');

Auth::routes(['register' => false]);

// Route::get('/home', 'HomeController@index')->name('home');

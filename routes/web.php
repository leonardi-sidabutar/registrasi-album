<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

Route::get('/', 'RegisterController@index')->name('register_form');
Route::post('registration', 'RegisterController@registration')->name('register.post');

Route::get('/login', 'RegisterController@login')->name('login_form');
Route::post('/login_act', 'RegisterController@login_act')->name('login_act.post');
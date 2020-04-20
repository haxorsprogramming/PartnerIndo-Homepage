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

Route::get('/', 'PageCon@loginPage');
Route::get('/profile', 'PageCon@loginPage');
Route::get('/service', 'PageCon@loginPage');
Route::get('/product', 'PageCon@loginPage');
Route::get('/news-insight', 'PageCon@loginPage');
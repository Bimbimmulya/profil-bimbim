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

Route::get('/', 'PortofolioController@home');

Route::get('/contact', 'PortofolioController@contact');

Route::get('/articel', 'PortofolioController@articel');

Route::get('/kategori', 'PortofolioController@kategori');
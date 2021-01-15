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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',"MainController@index");
Route::get('main',"MainController@index");
Route::get('about',"AboutController@index");
Route::get('order',"OrderController@index");
Route::get('portfolio',"PortfolioController@index");
Route::get('contact',"ContactController@index");

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/crochet', 'crochetController@fun_crochet')->name('sections.about');



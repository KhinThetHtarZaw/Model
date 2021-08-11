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
// Route::get('/about', function () {
//     return view('pages.aboutus');
// });

Route::get('/','App\Http\Controllers\PageController@welcome');

Route::get('/aboutus','App\Http\Controllers\PageController@aboutus');

Route::get('/widget',function (){
	return view('pages.widget');
});

Route::get('/calender',function(){
	return view('pages.calender');
});
Route::get('/posts','App\Http\Controllers\PostController@index');

Route::get('/posts/create','App\Http\Controllers\PostController@create');

Route::post('/posts/save','App\Http\Controllers\PostController@save');

Route::get('/posts/edit/{id}','App\Http\Controllers\PostController@edit');

Route::post('/posts/update','App\Http\Controllers\PostController@update');

Route::get('/posts/delete/{id}','App\Http\Controllers\PostController@delete');

Route::get('/category','App\Http\Controllers\PostController@index1');

Route::get('/category/create1','App\Http\Controllers\PostController@create1');

Route::post('/category/save1','App\Http\Controllers\PostController@save1');

Route::get('/category/edit1/{id}','App\Http\Controllers\PostController@edit1');

Route::post('/category/update1','App\Http\Controllers\PostController@update');

Route::get('/category/delete1/{id}','App\Http\Controllers\PostController@delete');

Route::get('/memo','App\Http\Controllers\MemosController@index');

Route::get('/memo/create','App\Http\Controllers\MemosController@create');

Route::post('/memo/store','App\Http\Controllers\MemosController@store');

Route::get('/memo/edit/{id}','App\Http\Controllers\MemosController@edit');

Route::post('/memo/update','App\Http\Controllers\MemosController@update');

Route::get('/memo/destroy/{id}','App\Http\Controllers\MemosController@destroy');

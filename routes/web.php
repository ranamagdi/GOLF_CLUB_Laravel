<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('home');
})->name('homepage');

Route::get('/list', function () {
    return view('list');
})->name('listpage');

Route::get('/details', function () {
    return view('details');
})->name('detailspage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/store','MemberController@store')->name('member.store');

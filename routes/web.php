<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
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
    $users= User::all();
    dd($users);
    return view('welcome');
});
Route::get('/user', 'UserController@index')->name('user');
Route::get('/adduser', 'UserController@create')->name('adduser');
Route::post('/storeuser', 'UserController@store')->name('storeuser');
// Route::get('/user', 'UserController@index')->name('user');
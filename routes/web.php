<?php

use App\Http\Controllers\AdminLoginController;
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

Route::get('/', function () {
    return view('layout.main', [
        'title' => 'Home | Personal Project'
    ]);
});

Route::get('/blog', function () {
    return view('layout.secondary', [
        'title' => 'Blog | Personal Project'
    ]);
});

Route::get('/login-space', 'LoginController@index')->name('login');
Route::post('/login-space', 'LoginController@authenticate');
Route::get('/dashboard', 'CreatorController@index')->middleware('auth');
Route::get('/dashboard/logout', 'LoginController@logout');
// Route::get('/admin', 'AdminLoginController@login')->name('login');
// Route::post('/admin', 'AdminLoginController@authenticate');
// Route::get('/dashboard', 'AdminController@index')->middleware('auth');
// Route::get('/dashboard/logout', 'AdminLoginController@logout');

// Route::get('/creator', 'AuthorLoginController@login')->name('login');
// Route::post('/creator', 'AuthorLoginController@authenticate');
// Route::get('/creator-space', 'AuthorController@index')->middleware('auth');
// Route::get('/categories', function () {
//     return view('layout.secondary');
// });

// Route::view('/', 'welcome');

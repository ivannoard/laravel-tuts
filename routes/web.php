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

Route::get('/login-admin', 'AdminLoginController@login')->name('login');
Route::post('/login-admin', 'AdminLoginController@authenticate');
Route::get('/dashboard-admin', 'AdminController@index')->middleware('auth');
Route::get('/dashboard-admin/logout', 'AdminLoginController@logout');

Route::get('/author-login', 'AuthorLoginController@login');
// Route::get('/categories', function () {
//     return view('layout.secondary');
// });

// Route::view('/', 'welcome');

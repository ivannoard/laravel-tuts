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

Route::get('/', function () {
    return view('layout.main', [
        'title' => 'Home | Personal Project'
    ]);
});

Route::get('/blog', 'BlogController@index');
Route::get('/blog/allpost', 'BlogController@allpost');
Route::get('/blog/{post:slug}', 'BlogController@show');

Route::get('/login-space', 'LoginController@index')->name('login');
Route::post('/login-space', 'LoginController@authenticate');
Route::get('/dashboard', 'CreatorController@index')->middleware('auth');
Route::get('/dashboard/logout', 'LoginController@logout');

Route::resource('/dashboard-post', 'DashboardPostController');

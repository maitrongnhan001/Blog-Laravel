<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
$ArticleController = 'App\Http\Controllers\ArticleController';
$UserController = 'App\Http\Controllers\AdminController';

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
    return view('welcome');
});

Route::get('/user', [$UserController, 'ShowImportantInfo '])->middleware('auth');

Route::resource('/baiviet', $ArticleController);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('user/{name}',['as'=>'user.single', 'uses' => 'App\Http\Controllers\UserController@Single']);
Route::get('user/edit/{name}', [UserController::class, 'edit']);
 

Route::get('/create', [CategoryController::class, 'create']);
Route::post('/categories/categories/store', [CategoryController::class, 'store']);
Route::get('categories/index', [CategoryController::class, 'index']);
Route::get('/show/{post}', [CategoryController::class, 'show']);
Route::get('/edit/{post}', [CategoryController::class, 'edit']);
Route::post('categories/update/{post}', [CategoryController::class, 'update']);
Route::get('/destroy/{post}', [CategoryController::class, 'destroy']);



Route::get('site/{slug}',['as'=>'pro.single', 'uses' => 'App\Http\Controllers\SiteController@Single'])->where('slug','[\w\d\-\_]+');
Route::get('site',['as'=>'pro.index', 'uses' => 'App\Http\Controllers\SiteController@Archive']);


Route::get('/create', [PostController::class, 'create']);
Route::post('/store', [PostController::class, 'store']);
Route::get('/index', [PostController::class, 'index']);
Route::get('/show/{post}', [PostController::class, 'show']);
Route::get('/edit/{post}', [PostController::class, 'edit']);
Route::post('/update/{post}', [PostController::class, 'update']);
Route::get('/destroy/{post}', [PostController::class, 'destroy']);


Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::post('/contact', [PagesController::class, 'postContact']);
Route::get('/index', [PagesController::class, 'index']);



Route::get('/', function () {
    return view('auth.login');
});

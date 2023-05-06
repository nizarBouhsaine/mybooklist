<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookUserController;

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

/*Displays a list of the books available */
Route::get('/', [BookController::class,'index']);

Route::get('/create', [BookController::class,'create'])->middleware('auth');

Route::post('/Books', [BookController::class,'store']);

/*Displays single book information */
Route::get('/Books/{book}', [BookController::class,'show']);






/*Displays a signup form*/
Route::get('/signup', [UserController::class,'create'])->middleware('guest');

/*Displays a login form*/
Route::get('/login', [UserController::class,'login'])->name('login')->middleware('guest');

/*Block any user from accessing it through a url input*/
Route::get('/authenticate', [UserController::class,'authenticate'])->middleware('guest')->middleware('auth');

/*Authentication*/
Route::post('/authenticate', [UserController::class,'authenticate']);

/*Block any user from accessing it through a url input*/
Route::get('/store', [UserController::class,'store'])->middleware('guest')->middleware('auth');

/*stores the signup form's infos*/
Route::post('/store', [UserController::class,'store']);

/*Block any user from accessing it through a url input*/
Route::get('/logout', [UserController::class,'logout'])->middleware('guest')->middleware('auth');
/*user logout*/
Route::post('/logout', [UserController::class,'logout']);



Route::post('/Books/{book}',[BookUserController::class,'store']);

Route::get('/mybooks',[BookUserController::class,'manage'])->middleware('auth');

Route::put('/update/{book}',[BookUserController::class,'update']);

Route::delete('/destroy/{book}',[BookUserController::class,'destroy']);

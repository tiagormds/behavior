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
    return view('welcome');
});

Route::view('/form', 'form');

Route::get('/users/1', [\LaraDev\Http\Controllers\UserController::class, 'index']);
Route::get('/getData', [\LaraDev\Http\Controllers\UserController::class, 'getData'])->name('getData');
Route::post('/postData', [\LaraDev\Http\Controllers\UserController::class, 'postData'])->name('postData');

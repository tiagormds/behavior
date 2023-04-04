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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::view('/form', 'form');
//
//Route::get('/users/1', [\LaraDev\Http\Controllers\UserController::class, 'index']);
//Route::get('/getData', [\LaraDev\Http\Controllers\UserController::class, 'getData'])->name('getData');
//Route::post('/postData', [\LaraDev\Http\Controllers\UserController::class, 'postData'])->name('postData');
Route::put('/putData', [\LaraDev\Http\Controllers\UserController::class, 'postData'])->name('putData');

//Route::get('/posts/premium', [\LaraDev\Http\Controllers\PostController::class, 'premium']);
//Route::resource('posts', \LaraDev\Http\Controllers\PostController::class);

Route::get('', [\LaraDev\Http\Controllers\UserController::class, 'show']);

Route::get('/users', function (){
   echo "Listagem dos usuários da minha base!";
});

Route::view('/form', 'form');

Route::fallback(function (){
    echo "<h1>Ooops, seja muito bem vindo a nossa página 404... nenhum registro foi encontrado!</h1>";
});

Route::redirect('/users/add', url('/form'), 301)->name('posts.index');
Route::get('/posts/index', [\LaraDev\Http\Controllers\PostController::class, 'indexRedirect'])->name('posts.indexRedirect');

//Route::get('/user/{id}/comments/{comment}', function ($id, $comment){
//    var_dump($id, $comment);
//});

//Route::get('/user/{id}/comments/{comment?}', function ($id, $comment=null){
//    var_dump($id, $comment);
//});

//Route::get('/user/{id}/comments/{comment?}', function ($id, $comment=null){
//    var_dump($id, $comment);
//})->where('id', '[0-9]+');

Route::get('/user/{id}/comments/{comment?}', [\LaraDev\Http\Controllers\UserController::class, 'userComments'])->where(['id' => '[0-9]+', 'comment' => '[a-z0-9]+']);


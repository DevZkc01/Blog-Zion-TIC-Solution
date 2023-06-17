<?php

use Illuminate\Support\Facades\Http;
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



Auth::routes();

Route::get('/ZION Blog/Contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');

Route::get('/ZION Blog/APropos', [App\Http\Controllers\ContactController::class, 'apropos'])->name('apropos');

Route::get('/', [App\Http\Controllers\AcceuilController::class, 'index'])->name('acceuil.index');

Route::get('/acceuil/toutes-les-publications', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*********************** Post like **********************/
Route::post('/like',[App\Http\Controllers\PostController::class, 'like'])->name('post.like');

/********Post*************/
Route::put('/Post/update/{post}', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');

Route::get('/Post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');

Route::post('/Post/store', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');

Route::get('/Post/Notification/{post}/{notification}',[App\Http\Controllers\PostController::class, 'notification'])->name('post.notification');

Route::get('/Post', [App\Http\Controllers\PostController::class, 'creerpost'])->name('post.creer');

Route::get('/Post/editer/{post}', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');

Route::get('/Post/delete/{post}', [App\Http\Controllers\PostController::class, 'delete'])->name('post.delete');

Route::get('/Actualités/Pourtous', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');

/*************  Articles***********/

Route::get('/article/creer-un-article', [App\Http\Controllers\ArticleController::class, 'create'])->name('article.create');

Route::post('/article/store', [App\Http\Controllers\ArticleController::class, 'store'])->name('article.store');

Route::get('/article/toutes-les-articles', [App\Http\Controllers\ArticleController::class, 'index'])->name('article.index');

/********Profile***********/
Route::get('/Profile/edit/{pseudo}', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');

Route::get('/Profile/{user} ', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');

Route::put('/Profile/update/{user} ', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

/*******Commentaires********/
Route::post('/Commentaires/store/{post}', [App\Http\Controllers\CommentairesController::class,'store'])->name('commentaire.store');


?>
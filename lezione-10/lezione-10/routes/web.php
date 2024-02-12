<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class,'homepage'])->name('homepage');

Route::get('/articles',[ArticleController::class,'index'])->name('articles.index');

// rotta parametrica

Route::get('/articles/{id}',[ArticleController::class,'show'])->name('articles.show');





//rotta con parametro opzionale
Route::get('/articles/filter/{category}',[ArticleController::class,'byCategory'])->name('articles.byCategory');

//creazione modello di test
Route::get('/article/create',function(){return view('create');})->name('articles.create');

Route::post('/article/store',[ArticleController::class,'store'])->name('articles.store');


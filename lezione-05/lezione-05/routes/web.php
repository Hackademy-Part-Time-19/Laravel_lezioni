<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MailController;

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

Route::get('/articoli',[ArticleController::class,'index'])->name('articles.index');

// rotta parametrica

Route::get('/articolo/{id}',[ArticleController::class,'show'])->name('articles.show');



Route::get('/contatti',[PageController::class,'contacts'])->name('contacts');


//rotta con parametro opzionale
Route::get('/articoli/{category}',[ArticleController::class,'byCategory'])->name('articles.byCategory');


//rotte post

Route::post('/contatti/invio',[MailController::class,'sendContact'])->name('contact.send');
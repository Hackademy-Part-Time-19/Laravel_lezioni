<?php


use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/ricetta/{versione?}',function (string $versione ="pasta"){
    return $versione ;
});

Route::get('/contacts',[\App\Http\Controllers\PageController::class,'contacts'])->name('contacts');

Route::post('/contacts/send',[\App\Http\Controllers\PageController::class,'send'])->name('contacts.send');
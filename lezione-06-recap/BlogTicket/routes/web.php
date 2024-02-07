<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

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
    return view('welcome');
})->name('home');

Route::get('/tickets',[TicketController::class,'index'])->name('tickets.index');

Route::get('/ticket/{id}',[TicketController::class,'show'])->name('ticket.show');

Route::post('ticket/answer',[TicketController::class,'send'])->name('send.email');

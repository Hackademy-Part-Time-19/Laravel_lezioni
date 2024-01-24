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
    $titolo = 5;

    return view('welcome',['titolo' => $titolo]);
})->name('home');





Route::get('/articoli',function(){


    $articoli = [0 =>['titolo'=> 'Articolo 1', 'descrizione'=>'descrizione di prova','nome'=>'Luca'],
    1=> ['titolo'=> 'Articolo 2', 'descrizione'=>'descrizione di prova','nome'=>'Marco'],
    2=>['titolo'=> 'Articolo 3', 'descrizione'=>'descrizione di prova','nome'=>'Pietro'],
    3=>['titolo'=> 'Articolo 4', 'descrizione'=>'descrizione di prova','nome'=>'Laura']
];

    return view('articoli',['articoli'=> $articoli ,'titolo' => 'titolo effettivo']);
    

})->name('articoli');


// rotta parametrica

Route::get('/articolo/{id}',function($id){
    $articoli = [0 =>['titolo'=> 'Articolo 1', 'descrizione'=>'descrizione di prova','nome'=>'Luca'],
    1=> ['titolo'=> 'Articolo 2', 'descrizione'=>'descrizione di prova','nome'=>'Marco'],
    2=>['titolo'=> 'Articolo 3', 'descrizione'=>'descrizione di prova','nome'=>'Pietro'],
    3=>['titolo'=> 'Articolo 4', 'descrizione'=>'descrizione di prova','nome'=>'Laura']
];

    // dd($articoli);
    
    return view('dettaglio',['articolo'=> $articoli[$id]]);
})->name('articoli.dettaglio');



Route::get('/chi-siamo',function(){

    return view('chi-siamo');

})->name('contatti');


Route::get('/test',function(){

    return view('navbar');

});


//rotta con parametro opzionale
Route::get('/rotta/{parametro?}',function($parametro = 'valore di default'){
    return $parametro;
});
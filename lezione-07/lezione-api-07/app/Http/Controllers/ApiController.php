<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public $articles = [0 =>['titolo'=> 'Articolo di Sport', 'descrizione'=>'descrizione di prova','nome'=>'Luca','category'=>'sport'],
    1=> ['titolo'=> 'La guerra del madagascar', 'descrizione'=>'descrizione di prova','nome'=>'Marco','category'=>'film'],
    2=>['titolo'=> 'Articolo di elettronica', 'descrizione'=>'descrizione di prova','nome'=>'Pietro','category'=>'elettronica'],
    3=>['titolo'=> 'Articolo di cultura', 'descrizione'=>'descrizione di prova','nome'=>'Laura','category'=>'cultura'],
    ['titolo'=> 'Articolo di sport 2', 'descrizione'=>'descrizione di prova','nome'=>'Laura','category'=>'sport']
    ];

    public function articles(){
        return $this->articles;
    }
}

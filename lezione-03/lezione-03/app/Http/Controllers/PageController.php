<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $articles= [0 =>['titolo'=> 'Articolo di Sport', 'descrizione'=>'descrizione di prova','nome'=>'Luca','category'=>'sport'],
                        1=> ['titolo'=> 'Articolo sui film', 'descrizione'=>'descrizione di prova','nome'=>'Marco','category'=>'film'],
                        2=>['titolo'=> 'Articolo di elettronica', 'descrizione'=>'descrizione di prova','nome'=>'Pietro','category'=>'elettronica'],
                        3=>['titolo'=> 'Articolo di cultura', 'descrizione'=>'descrizione di prova','nome'=>'Laura','category'=>'cultura'],
                        ['titolo'=> 'Articolo di sport 2', 'descrizione'=>'descrizione di prova','nome'=>'Laura','category'=>'sport']
                        ];

    // private $categories= [];

    // public function __construct()
    // {
    //     foreach($this->articles as $article){
    //         if(!in_array($article['category'],$this->categories)){
    //             $this->categories[] = $article['category'];
    //         }
    //     }

        
    // }
    // metodo getter
    public function getArticles(){

        return $this->articles;
    }

    // metodo setter
    public function setArticles($valore){
        $this->articles = $valore;
    }

    public function homepage(){

        $titolo = 'Homepage';

         return view('welcome',[ 'titolo' => $titolo]);

    }

    public function contacts(){
        return view('chi-siamo');
    }
}

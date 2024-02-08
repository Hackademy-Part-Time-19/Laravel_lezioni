<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articles= [0 =>['titolo'=> 'Articolo di Sport', 'descrizione'=>'descrizione di prova','nome'=>'Luca','category'=>'sport'],
                        1=> ['titolo'=> 'Articolo sui film', 'descrizione'=>'descrizione di prova','nome'=>'Marco','category'=>'film'],
                        2=>['titolo'=> 'Articolo di elettronica', 'descrizione'=>'descrizione di prova','nome'=>'Pietro','category'=>'elettronica'],
                        3=>['titolo'=> 'Articolo di cultura', 'descrizione'=>'descrizione di prova','nome'=>'Laura','category'=>'cultura'],
                        ['titolo'=> 'Articolo di sport 2', 'descrizione'=>'descrizione di prova','nome'=>'Laura','category'=>'sport']
                        ];

        public $database = [
            ['nome'=> 'Luca','cognome'=>'Bianchi'],
            ['titolo'=>'Sport','corpo'=> 'Lorem bla bla'],
            



        ];
    // private $categories= ['sport','film','elettronica','cultura'];

    // public function __construct()
    // {
    //     foreach($this->articles as $article){
    //         if(!in_array($article['category'],$this->categories)){
    //             $this->categories[] = $article['category'];
    //         }
    //     }

        
    // }

    //!voglio filtrare gli annunci per categoria
    
    //dropdown con elenco categorie, richiamo la rotta parametrica associata alla categoria
    // uso una rotta parametrica, con parametro categoria
    //Sul controller: verifica sugli articoli se appartengono alla categoria o no
    //passaggio alla vista dei dati
    //vista: gestione card degli articoli

    public function index(){
        $titolo = 'Articoli';
        
        
        //compact() rende un array le variabili il cui nome passo come parametro alla funzione
        return view('articoli',compact('titolo'),['articoli'=> $this->articles]);
        
        
    }

    public function show($id){
        
        return view('dettaglio',['articolo'=> $this->articles[$id]]);
    }

    public function byCategory($category){
        //altra logica
        $articlesByCategory=[];

        foreach($this->articles as $article){
            if($article['category'] == $category){
                $articlesByCategory[]=$article;
            }
        }

        return view('articoli-bycategory',['articoli'=>$articlesByCategory]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index(){
        $titolo = 'Articoli';
        
        //il metodo all() permette di recuperare tutti i record associati alla classe presenti nel database
        $articles= Article::all();
        
        return view('articoli',['articles'=> $articles]);
        
        
    }

    public function show($id){
        //find permette di recuperare il record filtrando per id 
        $article = Article::find($id);
        return view('dettaglio',['article'=> $article]);
    }

    public function byCategory($category){
        //where() è un metodo del query build che permette di costruire query sql in maniere semplificata,
        // per convertire la query in oggetti si conclude con il metodo get()
        $articlesByCategory=Article::where('category',$category)->get();
        // dd($articlesByCategory);

        return view('articoli-bycategory',['articles'=>$articlesByCategory]);
    }

    public function store(Request $request){

    //    $article = new Article;
    //    $article->title = $request->title;
    //    $article->description = $request->description;
    //    $article->active=$request->active;

    //    $article->save();



        //create permette di salvare a database un oggetto
        // del modello con i campi del valore passato come parametro a create()
       Article::create($request->all());

       return redirect()->back()->with(['success' =>'Articolo inserito con successo']);

    }

    public function create(){
        dd('ciaoo');
        
    }
}

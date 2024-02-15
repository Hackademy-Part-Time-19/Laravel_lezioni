<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ArticleStoreRequest;

class ArticleController extends Controller
{

    // eloquent e query builder 


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

    public function store(ArticleStoreRequest $request){

        $validated = $request->validated();

        $article = Article::create($validated);

        if($request->hasFile('image')){
            
            $path = 'public/images';

            $name = $article['id'] . 'copertina' .'.'. $request->file('image')->extension() ;
            
            $file = $request->file('image')->storeAs($path,$name);
            $image = $path .'/'. $name;
            
            $article->image = $image;
            $article->save();
        }
        

        return redirect()->back()->with(['success' =>'Articolo inserito con successo']);


        //sezione validazione dati

        // $validated = $request->validate([
        //     'title' => 'required|max:100',
        //     'description' => 'required|min:10',
        //     'category'=> 'required'
        // ]);


        // se la validazione fallisce vengo reindirizzato alla pagina invio form con gli errori associati

        // $validator = Validator::make($request->all(),[
        //     'title' => 'required|max:100',
        //     'description' => 'required|min:10',
        //     'category'=> 'required'
        // ],[
        //     'title.required'=>'Il titolo deve esistere',


        // ]
        // );

        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator)->withInput();

        // }



    //create permette di salvare a database un oggetto
    // del modello con i campi del valore passato come parametro a create()
        
            
    }

    public function create(){
        dd('ciaoo');
        
    }
}

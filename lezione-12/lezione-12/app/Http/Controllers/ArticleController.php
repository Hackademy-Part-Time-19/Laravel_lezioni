<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ArticleStoreRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();

        return view('articoli', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleStoreRequest $request)
    {

        $validated = $request->validated();

        $article = Article::create($validated);

        if ($request->hasFile('image')) {

            $path = 'public/images';

            $name = $article['id']. uniqid() . '.' . $request->file('image')->extension();

            $file = $request->file('image')->storeAs($path, $name);
            $image = $path . '/' . $name;

            $article->image = $image;
            $article->save();
        }


        return redirect()->back()->with(['success' => 'Articolo inserito con successo']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::find($id);
        return view('dettaglio', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article= Article::find($id);
        return view('edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleStoreRequest $request, string $id)
    {

        
        $article = Article::find($id);
        $validated = $request->validated();
            $article->update($validated);

        if ($request->hasFile('image')) {

            $path = 'public/images';

            $name = $article['id']  .uniqid(). '.' . $request->file('image')->extension();

            $file = $request->file('image')->storeAs($path, $name);
            $image = $path . '/' . $name;

            $article->image = $image;
            $article->save();
        }


        return redirect()->back()->with(['success' => 'Articolo inserito con successo']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::find($id);
        $article->delete();
        Storage::delete($article->image);
    }


    public function byCategory($category)
    {
        //where() è un metodo del query build che permette di costruire query sql in maniere semplificata,
        // per convertire la query in oggetti si conclude con il metodo get()
        $articlesByCategory = Article::where('category', $category)->get();
        // dd($articlesByCategory);

        return view('articoli-bycategory', ['articles' => $articlesByCategory]);
    }
}

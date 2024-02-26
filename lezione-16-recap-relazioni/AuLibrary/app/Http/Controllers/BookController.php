<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Requests\BookStoreRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books=Book::all();
        // dd($books);
        return view('books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres= Genre::all();
        return view('books.create',compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookStoreRequest $request)
    {
        $validated= $request->validated();
        $book= Book::create(['user_id'=>auth()->user()->id, 'title'=>$validated['title'],'description'=>$validated['description'],'price'=>$validated['price'],'image'=>'public/books/default/default.jpg']);
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $file= $request->file('image');
            $name= uniqid().$book->id.'.'.$file->extension();
            $file->storeAs('public/books/'.$book->id,$name);

            $book->image='public/books/'.$book->id.'/'.$name;
            $book->save();
        }
        $book->genres()->attach($request->genres);

        return redirect()->back()->with(['success'=>'Libro inserito con successo']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookStoreRequest $request, Book $book)
    {
        
        $validated= $request->validated();
        $book->update(['title'=>$validated['title'],'description'=>$validated['description'],'price'=>$validated['price']]);
        // if($request->hasFile('image') && $request->file('image')->isValid()){

        // }
        return redirect()->back()->with(['success'=>'Libro aggiornata con successo']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        //Book::destroy($book->id);
        return redirect()->back()->with(['delete'=>'Articolo eliminato con successo']);
    }

    public function userBooks(){
        //$books= Book::where('id',$user->id);
        $books= auth()->user()->books;
        return view('user.books',compact('books'));
    }
}

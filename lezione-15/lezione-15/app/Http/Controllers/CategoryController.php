<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('categories.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::create(['name'=>$request->name]);
        return redirect()->route('categories.index')->with(['success'=>'Categoria salvata con successo']);
    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // $category->name = $request->name;
        // $category->save();

        $category->update(['name'=>$request->name]);
        return redirect()->back()->with('success','Categoria modficata correttamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('delete','Categoria eliminata correttamente');
    }
}

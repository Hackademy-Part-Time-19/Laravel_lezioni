<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes= Recipe::all();
        return view('recipes.index',compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recipes.create',['courses'=>Course::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required','body'=>'required','time'=>'required']);
        $recipe=Recipe::create($request->all());

        $recipe->courses()->attach($request->courses);

        if($request->hasFile('image')){
            $path="public/".$recipe->id."/";
            $name= uniqid().".". $request->file('image')->extension();
            $request->file('image')->storeAs($path,$name);
            $recipe->image= $path.$name;
            $recipe->save();
        }
        return redirect()->back()->with(['success'=>'Ricetta inserita con successo!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        return view('recipes.show',compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->courses()->detach();
        Storage::delete($recipe->image);
        $recipe->delete();
        return redirect()->back()->with(['success'=>'Ricetta eliminata correttamente']);
    }
}

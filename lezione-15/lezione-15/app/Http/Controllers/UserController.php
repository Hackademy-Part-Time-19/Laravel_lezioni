<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('phone.create');
    }
    public function store(Request $request){
        
        auth()->user()->phone()->create($request->all());
        return redirect()->back();
        //salva telefono a database e reindirizza con success
    }
}

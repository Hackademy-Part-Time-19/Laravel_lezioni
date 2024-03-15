<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    
    public function contacts(){
        // $messaggio="Prova di messaggio";
        // $prova ="Prova";
        // return view('contacts',['messaggio'=>$this->messaggio]);
        // return view('contacts',compact('messaggio','prova'));

        return view('contacts');
    }

    public function send(Request $request){
        // $request->all();
        Mail::to('admin@cookbook.com')->send(new ContactMail($request->name,$request->comment));

        return redirect()->back()->with(['success'=>'La mail è stata inviata con successo!']);
    }
}

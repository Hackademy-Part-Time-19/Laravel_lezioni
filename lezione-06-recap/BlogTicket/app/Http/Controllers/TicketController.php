<?php

namespace App\Http\Controllers;

use App\Mail\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TicketController extends Controller
{
    public static $tickets=[
        ['name'=>'Fabio Bianchi','user_email'=>'fabio@example.com','created_at'=>'09/12/23','description'=>'descrizione di prova','status'=>'aperto'],
        ['name'=>'Mario Rossi','user_email'=>'mario@example.com','created_at'=>'07/12/23','description'=>'descrizione di prova','status'=>'aperto'],
        ['name'=>'Beppe Verde','user_email'=>'beppe@example.com','created_at'=>'02/12/23','description'=>'descrizione di prova','status'=>'chiuso'],
        ['name'=>'Paolo Pera','user_email'=>'paolo@example.com','created_at'=>'01/11/23','description'=>'descrizione di prova','status'=>'chiuso'],
        ['name'=>'Marco Mela','user_email'=>'marco@example.com','created_at'=>'01/01/24','description'=>'descrizione di prova','status'=>'aperto'],
        ['name'=>'Luca Loddo','user_email'=>'luca@example.com','created_at'=>'05/12/23','description'=>'descrizione di prova','status'=>'aperto']
    ];

    public function index(){

        return view('tickets',['tickets'=>self::$tickets]);
    }

    public function show($id){
        return view('ticket',['ticket'=>self::$tickets[$id],'id'=>$id]);
    }

    public function send(Request $request){
        $ticket= self::$tickets[$request->id];

        Mail::to($ticket['user_email'])->send(new Answer($ticket['name'],
        $ticket['created_at'],$request->answer)); 

        return redirect()->back()->with(['success'=>'Il ticket è stato gestito correttamente.']);
    }
}

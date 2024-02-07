<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class AnimeController extends Controller
{
   
    public function home(){

        // fare una richiesta http all'indirizzo https://api.jikan.moe/v4/genres/anime e ottenere una risposta

        $response = Http::get('https://api.jikan.moe/v4/genres/anime')->json();
        $generi = $response['data'];
        return view('generi',['dati'=>$generi]);
    }

    public function byGenre($genre_id){
        $uri= 'https://api.jikan.moe/v4/anime?genres=' . $genre_id;

        $anime = Http::get($uri)->json()['data'];
        
        // https://api.jikan.moe/v4/anime?genres=id_del_genere

        return view('genere',compact('anime'));
    }

    public function anime($id){

        $uri = 'https://api.jikan.moe/v4/anime/' . $id;

        $anime = Http::get($uri)->json()['data'];


        return view('anime',compact('anime'));

    }

    public function testApi(){
       return view('test');
    }

}

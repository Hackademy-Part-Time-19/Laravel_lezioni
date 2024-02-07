# API

    -Cos'è un'api?
        -https://it.wikipedia.org/wiki/Application_programming_interface
    
    -Esempi funzione API:
        -informazioni meteo
        -elenco film
        -email
        -ecc...

    -WebAPI(http) - Endpoint Http:
        -Richiesta tipo GET/POST
            -URI e metodo
        -risposta generalmente in formato json

# Utilizzare un'API nel nostro progetto
    -HTTP client di Laravel:
        -https://laravel.com/docs/10.x/http-client#introduction
    -Esempi per la nostra applicazione
        -Generi Anime: https://api.jikan.moe/v4/genres/anime
        -Singolo genere: https://api.jikan.moe/v4/anime?genres=id_del_genere
        -Anime con id: https://api.jikan.moe/v4/anime/{id}

# API in laravel
    -api.php
    -creazione semplice api in laravel
    -esempio di fetch in js
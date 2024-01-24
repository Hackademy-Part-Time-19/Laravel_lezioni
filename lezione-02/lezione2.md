# Recap lezione precedente

    -Richieste, Risposte, IP, DNS
    -php artisan serve
    -Rotte e viste

    -Richiesta è definita da un URI e un metodo:
        -URI: uniform resource identifier
        -Metodo: corrisponde al tipo di operazione che la mia richiesta va ad richiedere 
    -Risposta: è il messaggio di ritorno (una vista, un file, ecc... ) ad una richiesta ed è associata a uno status code ()

    -Vista: una pagina html con estensione .blade.php
        view('nome')

    -Rotte: è un collegamento tra una richiesta e una funzionalità offerta dal sito

    per avviare il server uso il comando "php artisan serve"

# Lezione 2

    -responsabilità e compiti di rotte e viste
    -php artisan make:view
    -modifica di una route e casistiche d'errore
    -dd()
    -"Named routes" e helper route()
        permette tramite l'helper route() di recuperare una rotta tramite il nome che le viene assegnato nel file web.php
        per assegnare il nome a una rotta   ->name('nomedaassegnare')
    -cenni di SEO per URI
    -blade e direttive
    -inserimento base dati in web.php
    -passaggio dati tramite metodo view()
    -rotte parametriche e parametro opzionale
    

# Extra

    -revisione concetto namespace 
    -asset() per importare fogli di stile
    -clone progetto


# appunti

?? null coalescence operator controlla se ciò che viene prima è nullo o non definito e lo sostituisce con il secondo argomento

$titolo ?? 'Stringa di default'


funzione dd($parametro) viene utilizzata per debugging e interrompe l'esecuzione del codice quando viene chiamata stampando il contenuto del parametro che viene passato

commenti blade: {{-- contenuto da commentare--}}
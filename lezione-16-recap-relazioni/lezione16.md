# Lezione 16 - Recap relazioni

- Continuiamo la realizzazione del sito per la pubblicazione libri implementando le relazioni one to many e many to many

- Funzionalità: 
    - Utente abilitato che può pubblicare dei libri sul sito
    - Possibilità di visualizzare i libri da parte di un qualsiasi utente
    - Generi: inseriti da un amministratore e selezionabili alla pubblicazione del libro (extra) 
    - Recensioni (da fare)

# Conversione a relazione One To Many tra user e book

    - nuova migrazione per aggiornare il database -> eliminare colonna author, inserire foreign key user_id
    - belongsTo e hasMany nei modelli che voglio mettere in relazione

    - chiamare sull'oggetto i metodi appena definiti ad es. auth()->user()->books

# Many to many tra books e genres

    - creiamo il modello genre: php artisan make:model Genre -mcr
    - creazione tabella pivot: creo la tabella book_genre che conterrà due foreign key
        - genre_id e book_id

    - definisco le funzioni sui modelli:
        - Per il genere: books() -> belongsToMany(Book::class)
        - Per il libro: genres() -> belongsToMany(Genre::class)

    - attach e detach
    
# 1-N
- hasMany(Modello) e belongsTo(Modello) belongsTo sul modello la cui tabella ha la foreign key

# N-N 
- belongsToMany(Modello) x2

# 1-1 

- hasOne(Modello) e belongsTo(Modello)   belongsTo sul modello la cui tabella ha la foreign key











# Lezione 13

# Creazione progetto

    - Inizializzare nuovo progetto: laravel new NomeProgetto
    - Entrare nel progetto: cd nomeCartella
    - composer install
    - Creazione pagina home e aggiustamento rotta
    - Import js e css tramite vite:
        - npm install
        - npm i bootstrap

    - Creazione database per il progetto(se ne avrò bisogno)

# Basi del progetto
    - Navbar
    - Implementazione di fortify(se necessario)
        - Fortify gestisce tutte le funzionalità di autenticazione per noi
        
    - Suddividere la logica di gestione delle richieste:
        - Rotte
        - Controller
    
    - Lanciare le migrazioni:
        - Una migrazione serve a definire la struttura del database e delle tabelle al suo interno
            - Funzioni Up e down: 
                -Up: modifica la struttra del database
                -down: annulla la modifica fatta nella funzione up quando eseguo il rollback
            - Rollback: esegue le funzioni down delle migrazioni 

    - Fortify: seguo la documentazione per implementare le funzionalità

    -Form: devo inserire l'attributo action="Uri a cui effettuo la richiesta" , il method="GET/POST"
        @csrf token per proteggere la richiesta da attacchi cross site request forgery
        campi di input con attributo name="nome del campo nella request"
    
# Implementazione modelli

    - php artisan make:model NomeModello (-mcr) per creare il modello (con logica CRUD)
    - CRUD: create read update delete


# Git e GitHub

# Setup
    - git init : inizializza la repository locale sul nostro pc( va eseguito nella directory che voglio rendere repository mai nella root del pc)(solo la prima volta)

    - git add .  aggiunge alla repository tutti i file presenti nella directory in cui mi trovo
    - git commit -m "Messaggio di commit"  salva nella repository locale i cambiamenti rispetto alla versione committata per ultima

    - git remote add origin git@github.com:EmanueleTrossarello/Provaa.git   imposta l'origine remota della repository locale alla repository su github
    - git branch -M main cambio il nome del branch o ramo da master a main

    - git push -u origin main    serve a pushare le modifiche locali alla repository online (solo la prima volta setta l'origine della repository su github a main)

    -git push per tutte le volte successive

# Effettivamente 


    -git add .
    -git commit -m "messaggio"
    -git push


# Clone

- git clone linkallarepository   crea una copia locale della repository online nella cartella con il nome della repository


# after clone

- dovrò creare il file .env  o da 0 o copiando .env.example
- php artisan key:generate
- composer install    nella cartella del progetto

- npm install
- per il database: ne creo uno nuovo locale e setto la configurazione del file .env
     dopo eseguo php artisan migrate
# Lezione 13

- Revisione totale laravel realizzando un sito per la pubblicazione libri

- Funzionalità: 
    - Utente abilitato che può pubblicare dei libri sul sito
    - Possibilità di visualizzare i libri da parte di un qualsiasi utente
    - Generi: inseriti da un amministratore e selezionabili alla pubblicazione del libro (extra) 
    - Recensioni (da fare)

# Creazione progetto

    - Inizializzare nuovo progetto: laravel new NomeProgetto
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
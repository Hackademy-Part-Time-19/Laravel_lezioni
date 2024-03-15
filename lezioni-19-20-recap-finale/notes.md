## Note

# Installazione

1) Tramite installazione manuale
- composer create-project laravel/laravel:^10.0 NomeProgetto 
 per lanciare la versione 10 di laravel

2) Tramite installer
- composer global require laravel/installer
- laravel new NomeNuovoProgetto

- Creato il progetto:
    - cd nomeprogetto

# Avvio server sviluppo

- php artisan serve
- npm run dev
// se lavoro con vite devo lanciare il server locale di gestione delle risorse

# Routes

- Vado nel file routes/web.php
- Tipo di rotta: GET,POST,PUT/PATCH, DELETE
- Uri: indirizzo che identifica la mia rotta all'interno del server es. /contatti
- Codice php da eseguire quando un utente interagisce con la rotta

- Rotte parametriche
    - Per definire un parametro inserisco all'interno dell'URI {nomeparametro}
    - Definito il parametro dell'URI devo accettare questo parametro nella funzione che viene eseguita quando richiamo la rotta

    - Posso dichiarare un parametro come opzionale scrivendolo  {nomeparametro?} , nella funzione dovrò inserire un valore di default per il parametro

- Per richiamare una funzione su un controller passo come secondo parametro nella definizione della rotta un array contente in percorso del controller e il nome del metodo da richiamare come stringa es. [\App\Http\Controllers\NomeController::class,'nomeMetodo']

# Controllers

- Per definire un nuovo controller:
    - php artisan make:controller NomeController

- Contiene i metodi richiamabili dalle rotte

# Components

- php artisan make:component nome.componente --view
- Vengono creati all'interno della cartella views/components 
- {{$slot}} questa variabile assume il valore di ciò che metto tra il tag di apertura e chiusura quando richiamo il componente

- Per richiamare un componente <x-nomecomponente> contenuto della variabile $slot da dichiarare nel componente <x-nomecomponente/>

- Per passare variabili al componente posso utilizzare piu metodi:
    - attributi:  <x-nomecomponente  variabile="contento della variabile" :valoredavariabile="$variabileesterna" >
    - slot:nomevariabile 
            <x-slot:nomeslot>
                <h2> Contenuto HTML</h2>
            </x-slot>

# Vite

- npm install
- npm install bootstrap

- Utilizzare i file app.css e app.js per importare il codice da utilizzare nelle viste

- npm run dev: per lanciare il server locale

- npm run build: per generare la versione finale dei file css e js nella cartella public

# Form

- action: definisce la rotta a cui effettua la richieste
- method: definisce il tipo di richiesta inviata
- @csrf token: protegge la richiesta da attacchi cross-site-request-forgery
- button: invia il form

- enctype="multipart/form-data": attributo per inviare file nella request

- attributo name="nomeVariabile" nei vari campi di input per passare il contenuto alla request

# Mail

- dobbiamo utilizzare un servizio di invio mail

- mailpit: nel file .env cambio la variabile MAIL_HOST da mailpit a localhost -> MAIL_HOST=localhost

- Invio mail:
    - use Illuminate\Support\Facades\Mail; classe da importare
    - Mail::to('email a cui invio@mail.com')->send(new Mail());

- se voglio passare dati alla vista della mail:
    - accetto i dati come parametri nel costruttore dell'oggetto mailable
    - quando istanzio una nuova mail da inviare passo i valori che questi parametri devono assumere
        - es. new Mail($par1,$par2,...)

# GIT

- Modifiche locali
    - git add .
    - git commit -m "Messaggio di commit"
    - git pull
    - git push

- Clonare una repository

    - git clone linkallarepositorychetrovatesugithub 
    - cp .env.example .env
    - composer install 
    - php artisan key:generate

- Merge 

    - 
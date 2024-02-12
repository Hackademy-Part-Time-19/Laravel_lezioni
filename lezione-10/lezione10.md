# Lezione 10 - Validazione e storage di file

# Recap lezione precedente
    - Form inserimento dati e creazione modello
    - Recuperare e mostrare i dati, tramite query builder o eloquent 
    - ripasso all() e get() con approfondimento

    -Collections : https://laravel.com/docs/10.x/eloquent-collections#available-methods 

# Validazione

    - $request->validate() e funzionamento
        - regole di validazione: sintassi e utilizzo
        - 'campo' => 'rule1|rule2|rule...'
        
    - Validator::make come approfondimento e $validator->fails()
    - Custom messages
        - 'campo.regola' => 'messaggio per la regola'

    - Gestion errori
        - Visualizzazione errori in $errors
        - Direttiva blade alternativa @error('campo') {{$message}} @enderror

    - Creazione request con validazione: php artisan make:request NomeRequest
        - public function authorize()
        - public function rules()
        - public function messages()

    - Utilizzo Request nel controller

    -helper old('campo') e withErrors($validator)->withInput()

# File upload

    - Modifica form
         - enctype
         - input 

    - gestione file nella request
    - esempio caricamento immagini

    - $request->hasFile('nomefile') vs $request->file('nomefile')
        ->getClientOriginalName() , ->extension() ,  recuperano rispettivamente il nome del file completo e l'estensione del file

    - store() vs storeAs()
    
    - Recuperare le immagini salvate e approfondimenti
        - php artisan storage:link, crea un link virtuale che condivide il contenuto di storage/app/public alla cartella public accessibile da utenti esterni
        - Storage::url('nome url')

# Extra

    - La size dei file da poter inserire in una request è definita nel php.ini proprietà upload_max_filesize

    - Approfondimento storage facade

    - local vs other
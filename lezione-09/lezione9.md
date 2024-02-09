# Lezione 9 - Modelli e migrazioni


# MySQL e TablePlus

- Installazione MySQL e TablePlus

- Configurazione TablePlus

- Ripasso di utilizzo MySQL RDBMS

# Laravel e MySQL

- Configurazione .env

- php artisan db:show 

# Migrations 

- Cos'è una migration

- Creare una migration: https://laravel.com/docs/10.x/migrations#introduction
    - Up e down
    - Schema
    - Dati nella migration:
        - Tipo numerico: https://dev.mysql.com/doc/refman/8.0/en/numeric-types.html
        - Tipo stringa: https://dev.mysql.com/doc/refman/8.0/en/string-types.html
        - Tipo tempo: https://dev.mysql.com/doc/refman/8.0/en/date-and-time-types.html

    - Conversione articoli da array a database

    - php artisan migrate
    - php artisan status
    - php artisan migrate:rollback
    - php artisan migrate:fresh
    - php artisan migrate:refresh

# Models

- Cos'è un modello e a cosa serve in laravel
- Cenni Eloquent ORM: un ORM o object relational mapper serve a mettere in comunicazione una classe model con una tabella associata sul database
- Creazione modello article
- Inserimento dati nel database tramite modello
- Recuperare dati dal database

# Extra 

- Usare form per caricare i dati a database
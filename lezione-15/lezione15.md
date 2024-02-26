# Recap lezione precedente

- Recap relazioni e one-to-many

# Lezione 15

- Relazione many-to-many come funziona?

- Tabella pivot: creazione e regole di creazione
    - Migrazione up e down associata

    - Regole tabella pivot: nome1_nome2  in cui i nomi sono al singolare e in ordine alfabetico
    - Approfondimento per interagire con la tabella pivot: https://laravel.com/docs/10.x/eloquent-relationships#retrieving-intermediate-table-columns

- Metodi belongsToMany nei modelli

- Modifica relazione tra categories e articles da 1-N a N-N

- Utilizzo checkbox come campo di input ( name=categories[] per passare i dati in un array)

- Direttive @selected e @checked blade

- Aggiustamento CRUD per gestire le relazioni N-N:
    - metodo attach()
    - metodo detach()
    - metodo sync()

    - es. $article->categories()->attach($categories);
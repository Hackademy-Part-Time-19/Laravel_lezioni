# Recap lezione precedente

- Breve riassunto su fortify e middleware

# Lezione 12 - Il CRUD

- Cos'è la logica CRUD?
- Creazione entità con logica normale e poi con logica CRUD
- Creazione rotte
    - php artisan make:model Nome -mcr

- risoluzione problema html form tramite @method('nome)

- metodo save() 
- update() -> https://laravel.com/docs/10.x/eloquent#mass-updates
- delete() vs destroy() -> https://laravel.com/docs/10.x/eloquent#deleting-models

# Extra 

- Esercizio su User model e/o Category
- approfondimento sull'utilizzo di where e parametri

- Filtro con where: Article::where('title','LIKE','%'.$string.'%')->get()
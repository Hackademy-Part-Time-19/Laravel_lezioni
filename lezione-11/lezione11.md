# Recap lezione precedente

- Riassunto dei concetti visti la scorsa lezione

# Lezione 11 - Fortify e middleware

# Fortify
- Cos'è Fortify?
- Cosa ci permette di fare?

- Implementazione funzionalità di login e register per l'utente, con form
- Test per la creazione di un utente
- Modifica navbar con pulsanti login, register, logout ->problemi

    - auth()->user() per recuperare l'utente attualmente loggato

-Direttive @auth e @guest

# Middleware

- Cos'è un middleware e a cosa ci serve?
- Configurazione middleware e applicazione alle rotte
- Middleware groups e route service provider
    - Route::middleware->group(){

    }

# Extra

- Email verification con fortify
- Aggiornamento dati utente
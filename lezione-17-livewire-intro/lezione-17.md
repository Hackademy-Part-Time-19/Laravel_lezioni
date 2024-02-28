# Lezione 17

# Introduzione a livewire

- Cos'è Livewire?
- Cosa posso fare con livewire: https://livewire.laravel.com/


- Installazione livewire: composer require livewire/livewire
- Creazione di un componente: php artisan make:livewire nome
- Utilizzare componente
- Esempio counter come da documentazione
- wire:click, wire:model
- Modificatori .live, .blur, .change, ecc

- Azione livewire(metodi):
    https://livewire.laravel.com/docs/actions

# Ciclo di vita (accenno)
- Doc: https://livewire.laravel.com/docs/lifecycle-hooks
- mount(), render() 
- chiamare metodi dalla pagina

- Ricerca realtime con livewire (dopo le factory)
- Foreach
https://livewire.laravel.com/docs/components#adding-wirekey-to-foreach-loops

# Seeders e factories

- Creazione seeder: php artisan make:seeder nomeseeder
- Creazione factory: php artisan make:factory nomefactory

- php artisan db:seed e --seed per le migrazioni

# Extra 
- pagination livewire e non
<x-layout>

    <div class="container">
        <div class="row">
            @foreach ($articoli as $chiave => $articolo)
                <x-card 
                :nome="$articolo['nome']" 
                :titolo="$articolo['titolo']" 
                :descrizione="$articolo['descrizione']">

                </x-card>
                {{-- 
                        : per un passaggio tramite attributo di codice php -> quindi variabili ad esempio
                        senza : per il passaggio di dati base (stringhe int ecc)
                        
                        --}}
            @endforeach

        </div>
    </div>
</x-layout>

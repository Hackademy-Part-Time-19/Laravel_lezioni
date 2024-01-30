<x-layout>
    
    <div class="container">
        <div class="row">
            @foreach ($articoli as $chiave => $articolo)
            <x-card 
            :articolo="$articolo"
            attributo-primo="attributo primo testo"

            {{-- -> attributoPrimo --}}

            semplice="sono una stringa"
            :complesso="$articolo"

            :$chiave 
            >
            {{-- <x-componente :$userId/>
 
           
            <x-componente :user-id="$userId" /> --}}
              
            </x-card>
            @endforeach
        </div>
    </div>
</x-layout>

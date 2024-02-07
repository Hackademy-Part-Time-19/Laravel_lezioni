<x-main-layout>

    <div class="container">
        <div class="row">
            <div class="col-12"><h1 class="text-center"> Elenco tickets</h1></div>
            @foreach ($tickets as $id => $ticket)
                <div class="col-12 mt-5">
                    <x-ticket-card 
                        :id="$id"
                        :name="$ticket['name']"
                        :date="$ticket['created_at']"
                        :content="$ticket['status']"

                    >
                        
                    </x-ticket-card>      
                </div>
            @endforeach

            
        </div>
    </div>

</x-main-layout>
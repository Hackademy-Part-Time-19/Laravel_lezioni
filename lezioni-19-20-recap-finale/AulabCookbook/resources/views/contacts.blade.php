<x-layouts.main>
    <h1>Suggerisci una tua ricetta</h1>
    <form action="{{ route('contacts.send') }}" method="post" >
        @csrf
        <div class="row g-3">
            <div class="col-12">
                <input name="name" type="text" class="form-control" placeholder="Name" aria-label="Name">
            </div>
            <div class="col-12">
                <textarea name="comment" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                
            </div>
        </div>
        <button type="submit"> Invia </button>
    </form>
</x-layouts.main>

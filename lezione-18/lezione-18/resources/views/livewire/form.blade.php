<div>
    <form action="">
        <label for="title">Titolo</label>
        <input type="text" id="title" wire:model.live="title">
        <label for="description">Descrizione</label>
        <input type="text" id="description" wire:model.change="description">
    </form>

   <h1> {{$title}} e {{$description}}</h1>
</div>

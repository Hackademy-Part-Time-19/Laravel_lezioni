<div>
    {{$counter}}
    <button wire:click="add">+</button>
    <button wire:click="sub"> -</button>

    <input type="text" wire:model.live="search">
    {{$search}}

    @foreach ($recipes as $recipe)
        <p>{{$recipe->name}}</p>
    @endforeach
</div>

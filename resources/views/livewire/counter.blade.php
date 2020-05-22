<div>
    <input wire:keydown.arrow-up="increment({{ $set }})" wire:keydown.arrow-down="decrement" type="text" wire:model="set">
    <p>{{ $counter }}</p>
    <p>Hydrate: {{ $hydrate }}</p>
    <p>Component Updating: {{ $updating }}</p>
    <p>Component Updated: {{ $updated }}</p>
    <button wire:click="increment({{ $set }})">+</button> &nbsp; | &nbsp; <button wire:click="decrement( {{ $set }} )">-</button>

    @for($i=1; $i<=10; $i++) @livewire('helloworld', ["count" => $i]) @endfor </div>
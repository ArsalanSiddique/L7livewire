<div>
    <input wire:keydown.arrow-up="increment({{ $set }})" wire:keydown.arrow-down="decrement" type="text" wire:model="set">
    <p>{{ $counter }}</p>
    <button wire:click="increment({{ $set }})">+</button> &nbsp; | &nbsp; <button wire:click="decrement( {{ $set }} )">-</button>
</div>
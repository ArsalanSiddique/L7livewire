<div>
    <p>Steps: {{ $counter }}</p>
    <input type="text" wire:model="steps">
    <p>
        <button wire:click="$emit('incrementEmit', {{ $steps }})">+</button> &nbsp; | &nbsp; <button wire:click="$emit('decrementEmit', {{ $steps }})">-</button>
    </p>

    <div style="display: flex; justify-content: center;">
        @livewire('button', ["title" => "Increment", "action" => "incrementEmit", "steps" => 5]) &nbsp; | &nbsp;
        @livewire('button', ["title" => "Decrement", "action" => "decrementEmit", "steps" => 5])
    </div>


    @livewire('helloworld')
</div>
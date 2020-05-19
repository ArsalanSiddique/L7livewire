<div>
    The Master doesn't talk, he acts. {{ $name }}
    <br>
    <p><input type="text" wire:model="message1"></p> {{-- default 150ms --}}
    <p>{{ $message1 }}</p>
    <p><input type="text" wire:model.debounce.1500ms="message2"></p>
    <p>{{ $message2 }}</p>
    <p><input type="text" wire:model.lazy="message3"></p>
    <p>{{ $message3 }}</p>
</div>

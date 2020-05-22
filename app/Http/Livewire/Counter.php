<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $counter;
    public $steps;

    public $listeners = [
        "incrementEmit" => "increment",
        "decrementEmit" => "decrement"
    ];

    // public function increment() {
    //     $this->emit("incrementEmit");
    //     // $this->counter++;
    // }

    // public function decrement() {
    //     $this->emit("decrementEmit");
    //     // $this->counter--;
    // }

    public function increment($steps)
    {
        $this->counter+= $steps;
    }

    public function decrement($steps)
    {
        $this->counter-= $steps;
    }

    public function mount()
    {
        $this->counter = 1;
        $this->steps = 1;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}

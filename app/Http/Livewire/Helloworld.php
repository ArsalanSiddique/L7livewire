<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Helloworld extends Component
{
    public $count;
    protected $listeners = [
        "incrementEmit" => "increment",
        "decrementEmit" => "decrement",
    ];

    public function increment($steps = 1)
    {
        $this->count += $steps;
    }

    public function decrement($steps = 1)
    {
        $this->count -= $steps;
    }

    public function mount()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.helloworld');
    }
}

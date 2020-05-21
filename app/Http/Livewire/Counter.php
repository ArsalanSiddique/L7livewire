<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $counter;
    public $set;
    public function increment($step) {
        $this->counter += $step;
    }

    public function decrement() {
        $this->counter -= $this->set;
    }

    public function mount()
    {
        $this->counter = 1;
        $this->set = 1;
    }



    public function render()
    {
        return view('livewire.counter');
    }
}

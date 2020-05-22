<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $counter;
    public $set;
    public $hydrate;

    public $updating;
    public $updated;

    public function increment($step) {
        $this->counter += $step;
    }

    public function decrement($step) {
        $this->counter -= $step;
    }

    public function plus() {
        $this->counter++;
    }

    public function minus() {
        $this->counter--;
    }

    public function mount($steps)
    {
        $this->counter = $steps;
        $this->set = 1;
        $this->hydrate = 0;
        $this->updating = 0;
        $this->updated = 0;
    }

    public function hydrate() {
        $this->hydrate++;
    }

    public function updatingSet() {
        $this->updating++;
    }

    public function updatedSet() {
        $this->updated++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}

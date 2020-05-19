<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Helloworld extends Component
{
    public $name = "Arsalan";

    public function mount() {
        $this->name = "Ahmed";
    }

    public function render()
    {
        return view('livewire.helloworld', ["name" => $this->name]);
    }
}

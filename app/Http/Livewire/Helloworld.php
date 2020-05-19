<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Helloworld extends Component
{
    private $name = "Arsalan";
    public $message1 = "Placeholder";
    public $message2 = "Placeholder";
    public $message3 = "Placeholder";

    public function mount() {
        $this->name = "Ahmed";
    }

    public function render()
    {
        return view('livewire.helloworld', ["name" => $this->name]);
    }
}

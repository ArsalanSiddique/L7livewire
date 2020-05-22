<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class Helloworld extends Component
{
    private $name = "Arsalan";
    public $message1 = "Placeholder";
    public $message2 = "Placeholder";
    public $message3 = "Placeholder";
    public $count;

    public function mount(Request $request, $count) {
        $this->name = "Ahmed";
        $this->count += $request->count ?? $count;
    }

    public function render()
    {
        return view('livewire.helloworld', ["name" => $this->name]);
    }
}

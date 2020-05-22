<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Button extends Component
{
    public $title = "button";
    public $action = "";
    public $steps = 1;


    public function mount($title, $action, $steps) {
        $this->title = $title;
        $this->action = $action;
        $this->steps = $steps;
    }



    public function render()
    {
        return view('livewire.button');
    }
}

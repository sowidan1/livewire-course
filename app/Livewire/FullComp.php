<?php

namespace App\Livewire;

use Livewire\Component;

class FullComp extends Component
{
    public function render()
    {
        return view('livewire.full-comp')->slot('content');
    }
}

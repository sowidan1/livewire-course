<?php

namespace App\Livewire;

use Livewire\Component;

class TestProperties extends Component
{
    public $todos = [];

    public $todo = '';

    public function add()
    {
        $this->todos[] = $this->todo;

        $this->todo = '';
    }


    public function render()
    {
        return view('livewire.test-properties');
    }
}

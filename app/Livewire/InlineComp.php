<?php

namespace App\Livewire;

use Livewire\Component;

class InlineComp extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            The Master doesn't talk, he acts.
        </div>
        HTML;
    }
}

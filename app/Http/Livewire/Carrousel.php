<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Carrousel extends Component
{
    public $cursos, $frase;
    public function render()
    {
        return view('livewire.carrousel');
    }
}

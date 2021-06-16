<?php

namespace App\Http\Livewire;

use App\Models\Cursos;
use Livewire\Component;

class Coursecard extends Component
{
    public $curso;
    public function render()
    {
        $cursos= new Cursos();
        $rating=$cursos->rating($this->curso->Id);
        return view('livewire.coursecard', compact('rating'));
    }
}

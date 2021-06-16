<?php

namespace App\Http\Livewire;

use App\Models\Curso_User;
use App\Models\Cursos;
use App\Models\User_Video;
use Livewire\Component;

class Coursecard extends Component
{
    public $curso;
    public function render()
    {
        $cursos= new Cursos();
        $this->curosId=$this->curso->Id;
        $curso_user_model=new Curso_User();
        $curso_guardado=$curso_user_model->curso_user($this->curso->Id)->count();
        return view('livewire.coursecard', compact('rating', 'curso_guardado'));
    }
    public function addCurso()
    {
        $cursoId=$this->cursoId;
        dd($cursoId);
    }
    public function removeCurso()
    {
        dd($this->curso->id);
    }
}

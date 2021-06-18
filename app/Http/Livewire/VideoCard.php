<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Alaouy\Youtube\Facades\Youtube;
use App\Models\User_Video;
use App\Models\Videos;
use Illuminate\Support\Facades\Auth;
use App\Models\Cursos;
use App\Models\Curso_Video;
use Livewire\WithPagination;

class VideoCard extends Component
{
   use WithPagination;
    public $search="", $slug, $cursos;

    public function render()
    {
        $cursos=new Cursos();
        $curso=$cursos->cursos_show($this->slug);
        $curso_video=new Curso_Video();
    
        $videos=$curso_video->curso_video($curso->Id, $this->search);
        return view('livewire.video-card', compact('cursos','videos'));
    }
   
   
}

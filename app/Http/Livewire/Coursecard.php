<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\Curso_User;
use App\Models\Cursos;
use App\Models\User_Video;
use App\Models\User_Vote;
use Livewire\Component;

class Coursecard extends Component
{
    /* REcibe el objeto curso */
    public $curso, $cursoId;
    public function render()
    {
        $cursos= new Cursos();
        $this->curosId=$this->curso->Id;
        $rating=$cursos->rating($this->curso->Id);
        $curso_user_model=new Curso_User();
        $curso_guardado=$curso_user_model->curso_user($this->curso->Id);
        $user_vote_model=new User_Vote();
        $user_vote=$user_vote_model->user_vote($this->curso->Id);
        return view('livewire.coursecard', compact('rating', 'curso_guardado', 'user_vote'));
    }
    public function addCurso($cursoId)
    {
        $curso_user_model=new Curso_User();
        $curso=Cursos::where('id','=',$cursoId)->first();
        $curso_guardado=$curso_user_model->curso_user($cursoId);
        $cursos_model=new Cursos();
        $este_curso=$cursos_model->cursos_show($curso->slug);
        $this->curso=$este_curso;
        if (!$curso_guardado) {
           $curso_nuevo= new Curso_User();
           $curso_nuevo->curso_id=$cursoId;
           $curso_nuevo->user_id=Auth::user()->id;
           $curso_nuevo->save();

        } else {
           Curso_User::destroy($curso_guardado->Id);

        }
    }
    public function votar($voto, $cursoId)
    {
        $rating=new User_Vote();
        $columna="rate".$voto;
        
        $rating->user_id=Auth::user()->id;
        $rating->curso_id=$cursoId;
        $rating->voto=$voto;
        $rating->save();
        $voto_actual=Cursos::select(
            $columna.' as rate'
        )
        ->where('id','=', $cursoId)
        ->first()
        ->rate;
        Cursos::where('id','=',$cursoId)
        ->update([$columna=>$voto_actual+1])
        ;
        return redirect('/cursos');
    }
    
}

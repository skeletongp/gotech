<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Alaouy\Youtube\Facades\Youtube;
use App\Models\Curso_Video;
use App\Models\Videos;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Session;

class FormAddVideo extends Component
{
    /* Recibe el Id del Curso y el slug */
    public $cursoId, $slug;
    public $open=false;
    public $clave;
    
    protected $rules=[
        'clave'=>'required|active_url'
    ];
    public function render()
    {
        return view('livewire.form-add-video');
    }
    public function toggleModal()
    {
        $this->open=!$this->open;
    }
    public function addVideo()
    {
        $this->validate();
        try {
            $clave=Youtube::parseVidFromURL($this->clave);
          if ($this->videoExiste($clave)<1) {
            $titulo=Youtube::getLocalizedVideoInfo($clave, 'pl')->snippet->title;
            $descripcion=substr(Youtube::getLocalizedVideoInfo($clave, 'pl')->snippet->description, 0, 150);
            $video= new Videos();
            $video->titulo=$titulo;
            $video->clave=$clave;
            $video->descripcion=$descripcion;
            $video->save();
            $this->open=false;
            $video_nuevo=Videos::where('clave','=',$clave)->first();
            $idVideo=$video_nuevo->id;
            $curso_video=new Curso_Video();
            $curso_video->curso_id=$this->cursoId;
            $curso_video->video_id=$idVideo;
            $curso_video->save();
            session()->flash('success','El video fue añadido exitosamente');
            return redirect()->route('cursos.show',[$slug=$this->slug]);
          } else {
            session()->flash('error','Este video ya está registrado');
            return redirect()->route('cursos.show',[$slug=$this->slug]);
          }
          
        } catch (\Throwable $th) {
            dd($th);
            session()->flash('error', $th);
            return redirect()->route('cursos.show',[$slug=$this->slug]);
        }
    }
    public function videoExiste($clave)
    {
        $video=Videos::where('clave','=',$clave)->get()->count();
        if ($video>0) {
            return true;
        } else {
            return false;
        }
        
    }
}

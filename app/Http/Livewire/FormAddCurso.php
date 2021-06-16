<?php

namespace App\Http\Livewire;

use App\Http\Requests\CursosRequest;
use App\Models\Categorias;
use League\CommonMark\Inline\Element\Image;

use Livewire\Component;
use Livewire\WithFileUploads;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Cursos;
class FormAddCurso extends Component
{
    use WithFileUploads;
    public $open=false;
    public $textFile="Seleccione una foto";
    public $filename;
    public $codigo, $nombre, $descripcion, $fotos, $categoria_id;
    protected $rules=[
        'codigo'=>'required|max:5',
        'nombre'=>'required|max:30',
        'descripcion'=>'required|max:150|min:50',
        'categoria_id'=>'required',
        'fotos'=>'required',
    ];
    public function render()
    {
        $categorias=Categorias::all();
        return view('livewire.form-add-curso', compact('categorias'));
    }
    public function toggleModal()
    {
        $this->open=!$this->open;
    }
    public function cursos_store()
    {
        $this->validate();
        $this->fotos->store('public/cursos_fotos');
        $values=[
            "codigo"=>$this->codigo,
            "nombre"=>$this->nombre,
            "descripcion"=>$this->descripcion,
            "fotos"=>$this->fotos,
            "categoria_id"=>$this->categoria_id,
            "cantidad"=>0,
            "participantes"=>0,
            "is_active"=>1,
        ];
       dd ($values);

        $request=$values;
    /*     Cursos::create($request->all()); */

/*         $this->cursos_index(); */
    }
}

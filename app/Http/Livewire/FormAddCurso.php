<?php

namespace App\Http\Livewire;

use App\Http\Requests\CursosRequest;
use App\Models\Categorias;
use League\CommonMark\Inline\Element\Image;

use Livewire\Component;
use Livewire\WithFileUploads;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Cursos;
use App\Models\Subcategorias;

class FormAddCurso extends Component
{
    use WithFileUploads;
    public $open=false;
    public $textFile="Seleccione una foto";
    public $filename;
    public $codigo, $nombre, $descripcion, $fotos, $categoria_id, $subcategoria_id;
    protected $rules=[
        'codigo'=>'required|max:5',
        'nombre'=>'required|max:30',
        'descripcion'=>'required|max:150|min:50',
        'categoria_id'=>'required',
        'subcategoria_id'=>'required',
        'fotos'=>'required',
    ];
    public function render()
    {
        $categorias=Categorias::all();
        $subcategorias=Subcategorias::where('categoria_id','=',$this->categoria_id)
        ->get();
        return view('livewire.form-add-curso', compact('categorias', 'subcategorias'));
    }
    public function toggleModal()
    {
        $this->open=!$this->open;
    }
    public function cursos_store()
    {
        $this->validate();
        $fotos=$this->fotos->store('public/cursos_fotos');

        $values=[
            "codigo"=>$this->codigo,
            "nombre"=>$this->nombre,
            "descripcion"=>$this->descripcion,
            "fotos"=>str_replace('public/',"",$fotos),
            "categoria_id"=>$this->categoria_id,
            "subcategoria_id"=>$this->subcategoria_id,
            "cantidad"=>0,
            "participantes"=>0,
            "is_active"=>1,
            
        ];

        Cursos::create($values);

    }
}

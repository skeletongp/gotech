<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\CursosRequest;
use App\Models\Cursos;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Frases;

class CursosController extends Controller
{
    public function cursos_index()
    {
        $cursostotal=new Cursos();
        $cursos=$cursostotal->cursos();
        $cursos2=Cursos::all();
        $frase=Frases::all()->random();
        return view('admin.cursos.index', compact('cursos','cursos2', 'frase'));
    }
   
}

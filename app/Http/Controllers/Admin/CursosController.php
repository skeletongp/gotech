<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\CursosRequest;
use App\Models\Curso_User;
use App\Models\Curso_Video;
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
        $curso1=Cursos::all()->random();
        $cursos2=Cursos::all();
        $frase=Frases::all()->random();
        return view('admin.cursos.index', compact('cursos','cursos2', 'frase','curso1'));
    }

    public function cursos_show($slug)
    {
        $cursos=new Cursos();
        $curso=$cursos->cursos_show($slug);
        $curso_video=new Curso_Video();
    
        $frase=Frases::all()->random();
        return view('admin.cursos.show', compact('curso', 'frase', 'slug'));
    }
    public function miscursos()
    {
        $cursostotal=new Curso_User();
        $cursos=$cursostotal->miscursos();
        $cursos2=Cursos::all();
        $frase=Frases::all()->random();
        return view('admin.cursos.miscursos', compact('cursos','cursos2', 'frase'));
    }
}

<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\CursosRequest;
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
        $cursos2=Cursos::all();
        $frase=Frases::all()->random();
        return view('admin.cursos.index', compact('cursos','cursos2', 'frase'));
    }

    public function cursos_show($slug)
    {
        $cursos=new Cursos();
        $curso=$cursos->cursos_show($slug);
        $curso_video=new Curso_Video();
    
        $videos=$curso_video->curso_video($curso->Id);
        $frase=Frases::all()->random();
        return view('admin.cursos.show', compact('curso', 'videos', 'frase'));
    }
   
}

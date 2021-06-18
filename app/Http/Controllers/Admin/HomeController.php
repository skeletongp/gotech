<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Curso_Video;
use App\Models\Frases;
use Illuminate\Http\Request;
use App\Models\Cursos;
use App\Models\Videos;

class HomeController extends Controller
{
    public function index()
    {
        $cursostotal=new Cursos();
        $curso=$cursostotal->cursos();
        $videos = new Curso_Video();
        $videos_todos=Videos::all();
        $video=$videos[rand(0, $videos_todos->count()-1)];
        $frase=Frases::all()->random();
        $cursos=Cursos::all();
        $curso1=$cursostotal->cursos_todos()[rand(0, $cursostotal->cursos_todos()->count()-1)];
        return view('admin.index', compact('frase', 'cursos', 'video', 'curso1'));
    }
   
}

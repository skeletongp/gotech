<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Frases;
use Illuminate\Http\Request;
use App\Models\Cursos;

class HomeController extends Controller
{
    public function index()
    {
        $frase=Frases::all()->random();
        $cursos=Cursos::all();
        return view('admin.index', compact('frase', 'cursos'));
    }
   
}

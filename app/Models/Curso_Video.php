<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso_Video extends Model
{
    use HasFactory;
    protected $table="curso_video";

    public function curso_video($id, $search)
    {
       $video= Curso_Video::select(
            'videos.id as idVideo',
            'videos.titulo as Titulo',
            'videos.clave as Clave',
            'videos.descripcion as Descripcion',
            'cursos.id as idCurso',
            'cursos.nombre as Curso'
        )
        ->join('videos', 'curso_video.video_id','videos.id')
        ->join('cursos', 'curso_video.curso_id','cursos.id')
        ->where('cursos.id','=', $id)
        ->where('videos.titulo','like', '%'.$search.'%')
        ->paginate(5);
        return $video;
    }
    public function video($id)
    {
       $video= Curso_Video::select(
            'videos.id as idVideo',
            'videos.titulo as Titulo',
            'videos.clave as Clave',
            'videos.descripcion as Descripcion',
            'cursos.id as idCurso',
            'cursos.nombre as Curso'
        )
        ->join('videos', 'curso_video.video_id','videos.id')
        ->join('cursos', 'curso_video.curso_id','cursos.id')
        ->where('videos.id','=', $id)
        ->first();
        return $video;
    }
}

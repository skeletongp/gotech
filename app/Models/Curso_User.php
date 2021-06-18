<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Curso_User extends Model
{
    use HasFactory;
    protected $table="curso_user";


    public function curso_user($curso_id)
    {
        $curso_user=Curso_User::select(
            'curso_id as idCurso',
            'user_id as idUser',
            "id as Id"
        )
        ->where('curso_id','=',$curso_id)
        ->where('user_id','=',Auth::user()->id)
        ->first();
        return $curso_user;
    }
    public function miscursos()
    {
        $cursos=Cursos::select(
            'cursos.id as Id',
            'cursos.codigo as Codigo',
            'cursos.nombre as Nombre',
            'cursos.descripcion as Descripcion',
            'cursos.participantes as Participantes',
            'cursos.cantidad as Cantidad',
            'cursos.fotos as Fotos',
            'cursos.slug as Slug',
            'categorias.id as Categoria',
            'categorias.nombre as idCategoria',
            'subcategorias.id as SubCategoria',
            'subcategorias.nombre as idSubCategoria',
        )
        ->join('categorias','cursos.categoria_id','=','categorias.id')
        ->join('subcategorias','cursos.subcategoria_id','=','subcategorias.id')
        ->join('curso_user','cursos.id','=','curso_user.curso_id')
        ->join('users','curso_user.user_id','=','users.id')
        ->where('cursos.is_active','=','1')
        ->where('users.id','=',Auth::user()->id)
        ->orderBy('id','desc')
        ->paginate()
        ;
        return $cursos;
    }
}

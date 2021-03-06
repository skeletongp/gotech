<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;
    protected $table='cursos';
    protected $guarded=[];
    public function cursos()
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
        ->where('cursos.is_active','=','1')
        ->orderBy('id','desc')
        ->limit(8)
        ->get()
        ;
        return $cursos;
    }
    public function cursos_todos()
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
        ->where('cursos.is_active','=','1')
        ->orderBy('id','desc')
        ->get()
        ;
        return $cursos;
    }
    public function cursos_show($slug)
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
        ->where('cursos.is_active','=','1')
        ->where('cursos.slug','=',$slug)
        ->first()
        ;
        return $cursos;
    }
    public function rating($id)
    {
       $curso=Cursos::select(
        'rate1 as Uno',
        'rate2 as Dos',
        'rate3 as Tres',
        'rate4 as Cuatro',
        'rate5 as Cinco',
       )
       ->where('id','=',$id)
       ->first()
       ;
        if ($curso) {
            $primero=$curso->Uno*1
        +$curso->Dos*2
        +$curso->Tres*3
        +$curso->Cuatro*4
        +$curso->Cinco*5;
        $segundo=$curso->Uno
        +$curso->Dos
        +$curso->Tres
        +$curso->Cuatro
        +$curso->Cinco;

        if($segundo>0){
            $valor=(round ( $primero/$segundo , 0 , PHP_ROUND_HALF_UP ));
            return ["rate"=>$valor, "total"=>$segundo];
        }
        else{
            return  ["rate"=>0, "total"=>0];
        }

        } else {
            return ["rate"=>0, "total"=>0];
        }
        
    }
}

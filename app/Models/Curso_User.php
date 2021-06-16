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
            'user_id as idUser'
        )
        ->where('curso_id','=',$curso_id)
        ->where('user_id','=',Auth::user()->id)
        ->get();
        return $curso_user;
    }
}

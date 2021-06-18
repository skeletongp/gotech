<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class User_Vote extends Model
{
    use HasFactory;
    protected $table='user_vote';
    public function user_vote($curso_id)
    {
        $curso_user=User_Vote::select(
            'curso_id as idCurso',
            'user_id as idUser',
            "id as Id",
            "voto as Voto"
        )
        ->where('curso_id','=',$curso_id)
        ->where('user_id','=',Auth::user()->id)
        ->count();
        return $curso_user;
    }
}

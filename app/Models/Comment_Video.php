<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment_Video extends Model
{
    use HasFactory;
    protected $table='comment_video';
    public function comentarios_todos($idVideo)
    {
       $comentarios=Comment_Video::select(
           "comment_video.id as idComentario",
           "comment_video.comentario as Comentario",
           "comment_video.created_at as Fecha",
           "users.id as idUsuario",
           "users.name as Usuario",
           
       )
       ->join('users','users.id','comment_video.user_id')
       ->where('comment_video.video_id','=',$idVideo)
       ->get();
       return $comentarios;
    }
}

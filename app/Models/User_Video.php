<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class User_Video extends Model
{
    use HasFactory;
    protected $table="user_video";

    public function user_video($clave)
    {
        $user_video=User_Video::select(
            "users.nombre as Usuario",
            "video.titulo as Video"
        )
        ->join('users','user_video.user_id','users.id')
        ->join('videos','user_video.video_id','videos.id')
        ->where("videos.clave",'=',$clave)
        ->where("users.id",'=',Auth::user()->id);
            return $user_video;
    }
    public function vistaCant($clave)
    {
        $vistaCant=User_Video::select(
            "user_video.id as Cantidad"
        )
        ->join('videos','user_video.video_id','videos.id')
        ->where("videos.clave",'=',$clave)
        ->get()->count()
        ;
        return $vistaCant;
    }
}

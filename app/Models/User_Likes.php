<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class User_Likes extends Model
{
    use HasFactory;
    protected $table='user_likes';
    public function likes($videoId)
    {
       $likes=User_Likes::select(
           "video_id"
       )
        ->where('video_id','=',$videoId)
        ->count();
        return $likes;
    }
    public function isLiked($videoId)
    {
       $likes=User_Likes::select(
           "video_id"
       )
        ->where('video_id','=',$videoId)
        ->where('user_id','=',Auth::user()->id)
        ->count();

        if($likes==0){
            return false;
        } else
        {
            return true;
        }
    }
}

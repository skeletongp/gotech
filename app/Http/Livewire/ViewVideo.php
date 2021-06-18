<?php

namespace App\Http\Livewire;

use App\Models\Curso_Video;
use App\Models\User_Likes;
use Livewire\Component;
use App\Models\User_Video;
use Illuminate\Support\Facades\Auth;
use App\Models\Videos;
use Illuminate\Support\Facades\Redirect;
class ViewVideo extends Component
{
    public $video;
    public $open=false;
    public function mount($video)
    {
       $this->video=$video;
    }
    public function render()
    {
      $video=$this->video;
      $user_like= new User_Likes();
      $likes=$user_like->likes($video['idVideo']);
      $isLiked=$user_like->isLiked($video['idVideo']);
      return view('livewire.view-video', compact('likes', 'isLiked'));
    }
    public function visto($clave, $idVideo)
    {
       $videos=new Curso_Video();
       $video=$videos->video($idVideo);
       $this->video=$video;
  
        $user_video= new User_Video();
        $visto=$user_video->user_video($clave)->count();
     if (!$visto) {
        $userId=Auth::user()->id;
        $videoId=Videos::where('clave','=',$clave)->first()->id;
        $user_video=new User_Video();
        $user_video->user_id=$userId;
        $user_video->video_id=$videoId;
        $user_video->save();
     } else {
        $userId=Auth::user()->id;
        $videoId=Videos::where('clave','=',$clave)->first()->id;
        $user_video=User_Video::where('video_id','=',$videoId)
        ->where('user_id','=',$userId);
        $user_video->delete();
     }
    }
    public function toggleModal($idVideo)
    {
    
      $videos=new Curso_Video();
      $video=$videos->video($idVideo);
      $this->video=$video;
       $this->open=!$this->open;
       return Redirect::back()->with('open');
    }
    public function like($isLiked, $videoId)
    {
      $videos=new Curso_Video();
      $video=$videos->video($videoId);
      $this->video=$video;
      if (!$isLiked) {
        $user_like=new User_Likes();
        $user_like->user_id=Auth::user()->id;
        $user_like->video_id=$videoId;
        $user_like->save();
        
      } else {
         # code...
      }
      
    }
}

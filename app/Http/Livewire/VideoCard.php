<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Alaouy\Youtube\Facades\Youtube;
use App\Models\User_Video;
use App\Models\Videos;
use Illuminate\Support\Facades\Auth;

class VideoCard extends Component
{
    public $clave, $comentarios, $likes, $descripcion, $titulo, $video, $nombre, $vistaCant;
    public function render()
    {
        $clave=$this->clave;
        $nombre=$this->nombre;
        $this->title=Youtube::getLocalizedVideoInfo($clave, 'pl')->snippet->title;
        $this->likes=Youtube::getLocalizedVideoInfo('V5-6nX53NCk', 'pl')->statistics->likeCount;
        $this->comentarios=Youtube::getLocalizedVideoInfo('V5-6nX53NCk', 'pl')->statistics->commentCount;
        $this->titulo=Youtube::getLocalizedVideoInfo('V5-6nX53NCk', 'pl')->snippet->title;
        $this->descripcion=Youtube::getLocalizedVideoInfo('V5-6nX53NCk', 'pl')->snippet->description;
        $user_video=new User_Video();
        $this->vistaCant=$user_video->vistaCant($clave);
        $visto=$user_video->user_video($clave);
        return view('livewire.video-card', compact('clave','visto'));
    }
    public function visto()
    {
        $userId=Auth::user()->id;
        $videoId=Videos::where('clave','=',$this->clave)->first()->id;
        $user_video=new User_Video();
        $user_video->user_id=$userId;
        $user_video->video_id=$videoId;
        $user_video->save();
    }
    public function no_visto()
    {
        $userId=Auth::user()->id;
        $videoId=Videos::where('clave','=',$this->clave)->first()->id;
        $user_video=User_Video::where('video_id','=',$videoId)
        ->where('user_id','=',$userId);
        $user_video->delete();
    }
}

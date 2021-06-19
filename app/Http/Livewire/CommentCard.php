<?php

namespace App\Http\Livewire;

use App\Models\Comment_Video;
use Livewire\Component;

class CommentCard extends Component
{
    public $video;
    public function render()
    {
        $comment_modal= new Comment_Video();
        $comentarios=$comment_modal->comentarios_todos($this->video->idVideo);
        return view('livewire.comment-card', compact('comentarios'));
    }
}

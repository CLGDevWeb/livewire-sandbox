<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class PostRow extends Component
{
    public Post $post;

    public function archivePost(): void
    {
        $this->post->delete();
    }

    public function restorePost(): void
    {
        $this->post->restore();
    }

    public function render(): View
    {
        return view('livewire.posts.row');
    }
}

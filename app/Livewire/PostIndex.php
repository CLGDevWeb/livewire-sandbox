<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class PostIndex extends Component
{
    public Collection $posts;

    public function mount(): void
    {
        $this->posts = Post::withTrashed()->latest()->get();
    }

    public function deletePost(int $postId): void
    {
        Post::withTrashed()->findOrFail($postId)?->forceDelete();

        $this->redirect(route('posts.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.posts.index');
    }
}

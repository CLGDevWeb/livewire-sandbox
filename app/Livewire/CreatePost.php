<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreatePost extends Component
{
    public array $tagList = ['fantasy', 'science-fiction', 'horror', 'children', 'thriller', 'romance'];

    #[Rule('required|string|min:2', as: 'title')]
    public string $title = '';

    #[Rule('required|string|min:2', message: 'Contenu minimum requis !')]
    public string $content = '';

    #[Rule('required|array')]
    public array $tags = [];

    public function create(): void
    {
        $validated = $this->validate();

        Post::create($validated);

        $this->redirect(route('posts.index'));
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}

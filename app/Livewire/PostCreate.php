<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class PostCreate extends Component
{
    public array $tagList = ['fantasy', 'science-fiction', 'horror', 'children', 'thriller', 'romance'];

    #[Rule('required|string|min:2', as: 'titre')]
    public string $title = '';

    #[Rule('required|string|min:2', message: 'Contenu minimum requis !')]
    public string $content = '';

    #[Rule('required|array')]
    public array $tags = [];

    public function store(): void
    {
        $validated = $this->validate();

        Post::create($validated);

        $this->redirect(route('posts.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}

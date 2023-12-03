<?php

namespace Tests\Feature\Livewire;

use App\Livewire\PostCreate;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class PostCreateTest extends TestCase
{
    use RefreshDatabase;

    public function test_renders_successfully()
    {
        Livewire::test(PostCreate::class)
            ->assertStatus(200);
    }

    public function test_can_create_post()
    {
        Livewire::test(PostCreate::class)
            ->set('title', 'Titre cool')
            ->set('content', 'Contenu cool')
            ->set('tags', ['horror', 'fantasy'])
            ->call('store');

        $post = Post::whereTitle('Titre cool')->first();

        $this->assertEquals('Titre cool', $post->title);
    }

    public function test_title_is_required()
    {
        Livewire::test(PostCreate::class)
            ->set('title', '')
            ->call('store')
            ->assertHasErrors(['title' => 'required']);
    }

    public function test_title_is_content()
    {
        Livewire::test(PostCreate::class)
            ->set('content', '')
            ->call('store')
            ->assertHasErrors(['content' => 'required']);
    }
}

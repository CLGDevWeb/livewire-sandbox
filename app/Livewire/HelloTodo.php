<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todos')]
class HelloTodo extends Component
{
    public string $todo = '';

    public array $todos = [];

    public function addTodo(): void
    {
        if ($this->todo !== '') {
            $this->todos[] = $this->todo;
            $this->reset('todo');
        }
    }

    // public function updatedTodo($value): void
    // {
    //     $this->validate('todo');
    // }

    // public function updated($property, $value): void
    // {
    //     dd($property, $value);
    // }

    public function render()
    {
        return view('livewire.hello-todo');
    }
}

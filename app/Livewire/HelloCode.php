<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Code')]
class HelloCode extends Component
{
    public Carbon $today;

    public function mount(): void
    {
        $this->today = now();
    }

    public function setDate(int $hours=0): void
    {
        $this->today = $this->today->addHours($hours);
    }

    public function render()
    {
        return view('livewire.hello-code');
    }
}

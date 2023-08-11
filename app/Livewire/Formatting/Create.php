<?php

namespace App\Livewire\Formatting;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class Create extends Component
{

    public bool $modal;

    public function mount(): void
    {
        $this->modal = false;
    }

    #[On('show-modal')]
    public function showModal(): void
    {
        $this->modal = true;
    }

    #[On('close-modal')]
    public function closeModal(): void
    {
        $this->modal = false;
    }

    public function render(): View
    {
        return view('livewire.formatting.create');
    }
}

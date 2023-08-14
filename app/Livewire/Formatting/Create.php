<?php

namespace App\Livewire\Formatting;

use App\Models\Formatting;
use Illuminate\Contracts\View\View;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Attributes\On;
use Livewire\Component;

class Create extends Component
{

    public bool $modal;

    public string $name;
    public ?string $description;
    public string $type;


    public function mount(): void
    {
        $this->modal = true;
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

    #[NoReturn]
    public function save() : void
    {
        dd($this->type);
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'type_formatting' => 'required',
        ]);

        Formatting::query()->create([
            'name' => $this->name,
            'description' => $this->description,
            'type_formatting' => $this->type_formatting,
        ]);

        $this->dispatch('close-modal');
        $this->dispatch('refresh')->to(Index::class);
    }

    public function render(): View
    {
        return view('livewire.formatting.create');
    }
}

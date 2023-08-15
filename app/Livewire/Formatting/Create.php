<?php

namespace App\Livewire\Formatting;

use App\Models\Formatting;
use Illuminate\Contracts\View\View;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Create extends Component
{
    use WithPagination;

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
        $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'string|nullable',
            'type' => 'required|exists:type_formattings,id',
        ]);

        Formatting::query()->create([
            'name' => $this->name,
            'description' => $this->description,
            'type' => $this->type,
        ]);

        $this->dispatch('close-modal');
        $this->dispatch('refresh-formatting')->to(Index::class);
    }

    public function render(): View
    {
        return view('livewire.formatting.create');
    }
}

<?php

namespace App\Livewire\Formatting;

use App\Models\{Formatting, Type};
use Illuminate\Contracts\View\View;
use JetBrains\PhpStorm\NoReturn;
use Livewire\{Attributes\On, Component, WithPagination};

class Create extends Component
{

    public bool $modal = false;

    public string $name = '';
    public ?string $description = '';
    public string $type_id = '';


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
            'type_id' => 'required|exists:types,id',
        ]);

        Formatting::query()->create([
            'name' => $this->name,
            'description' => $this->description,
            'type_id' => $this->type_id,
        ]);

        $this->dispatch('close-modal');
        $this->dispatch('refresh-formatting')->to(Index::class);
        $this->reset();
    }

    public function render(): View
    {
        return view('livewire.formatting.create', [
            'types' => Type::query()->get(),
        ]);
    }
}

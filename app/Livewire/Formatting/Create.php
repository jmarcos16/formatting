<?php

namespace App\Livewire\Formatting;

use App\Models\{Formatting, TypeFormatting};
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    #[Rule('required|string|max:255')]
    public string $name;

    #[Rule('string|max:255')]
    public string $description;

    #[Rule('required|string|in:pending,progress,finished')]
    public string $status;

    // #[Rule('required|exists:type_formattings,id')]
    public TypeFormatting $type;

    public function save(): void
    {
        $formatting = Formatting::query()->create([
            'name'        => $this->name,
            'description' => $this->description,
            'status'      => $this->status,
            'type'        => $this->type->id,
        ]);

        $this->dispatch('formatting-created');
    }

    public function render()
    {
        return view('livewire.formatting.create');
    }
}

<?php

namespace App\Livewire\Formatting;

use App\Models\Formatting;
use Livewire\{Component, WithPagination};

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.formatting.index', [
            'formattings' => Formatting::query()
            ->latest()
            ->paginate(),
        ]);
    }
}

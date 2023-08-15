<?php

namespace App\Livewire\Formatting;

use App\Models\Formatting;
use Livewire\{Attributes\On, Component, WithPagination};
use Illuminate\Contracts\View\View;

class Index extends Component
{
    use WithPagination;

    #[On('refresh-formatting')]
    public function refreshFormatting(): void
    {
        $this->resetPage();
    }

    public function render() : View
    {
        return view('livewire.formatting.index',[
            'formatting' => Formatting::query()
                ->latest()
                ->with('types:id,name')
                ->paginate(),
        ]);
    }
}

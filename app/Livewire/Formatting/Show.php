<?php

namespace App\Livewire\Formatting;

use Illuminate\Contracts\View\View;
use Livewire\Component;
use App\Models\Formatting;

class Show extends Component
{
    public Formatting $formatting;

    public function render() : View
    {
        return view('livewire.formatting.show');
    }
}

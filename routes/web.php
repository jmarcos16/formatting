<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Formatting\Index;
use App\Livewire\Formatting\Show;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    auth()->login(User::first() ?? User::factory()->create());

    return redirect()->route('formatting');
});

Route::get('formatting', Index::class)->name('formatting');
Route::get('formatting/{formatting}', Show::class)->name('formatting.show');


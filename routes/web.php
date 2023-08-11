<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    auth()->login(User::first());

    return redirect()->route('formatting');
});

Route::get('formatting',\App\Livewire\Formatting\Index::class)->name('formatting');



<?php

use Formatting\Index;
use Livewire\Livewire;

use function Pest\Laravel\assertDatabaseCount;

it('shoud be able list all formatting', function () {
    $user        = \App\Models\User::factory()->create();
    $formattings = \App\Models\Formatting::factory()->count(5)->create();

    Livewire::actingAs($user)
        ->test(Index::class)
        ->assertSee($formattings->first()->name);

    assertDatabaseCount('formattings', 5);
});



<?php

use Livewire\Livewire;
use function Pest\Laravel\{actingAs, assertDatabaseCount};

it('should be able create a new formatting', function () {
    $user = \App\Models\User::factory()->create();
    actingAs($user);

    $type = \App\Models\TypeFormatting::factory()->create();

    Livewire::test(\App\Livewire\Formatting\Create::class)
        ->set('name', 'New formatting')
        ->set('description', 'New formatting description')
        ->set('status', 'pending')
        ->set('type', $type)
        ->call('save');

    expect(\App\Models\Formatting::query()->where('name', 'New formatting')->exists())->toBeTrue();
    expect(\App\Models\Formatting::count())->toBe(1);
});

test('name is required', function () {
    $user = \App\Models\User::factory()->create();
    actingAs($user);

    $type = \App\Models\TypeFormatting::factory()->create();

    Livewire::test(\App\Livewire\Formatting\Create::class)
        ->set('name', '')
        ->set('description', 'New formatting description')
        ->set('status', 'pending')
        ->set('type', $type)
        ->call('save')
        ->assertHasErrors(['name', ['require']]);
});

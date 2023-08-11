<div class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">

    <div class=" lg:w-2/6 relative mx-auto top-[calc(100%-80%)] bg-white opacity-100 shadow rounded border p-6">

        <span class="text-2xl font-bold">Create new Formatting</span>

        <form wire:submit="save" class="gap-4">
            <div class="my-2">
                <x-input-label for="title" value="Title" />
                <x-text-input class="w-full" wire:model="title" id="title" placeholder="Title" />
                <x-input-error :messages="$errors->get('title')" />
            </div>

            <div class="my-2">
                <x-input-label for="description" value="Description" />
                <x-text-input class="w-full" wire:model="description" id="description" placeholder="Description" />
                <x-input-error :messages="$errors->get('description')" />
            </div>
        </form>

    </div>

</div>

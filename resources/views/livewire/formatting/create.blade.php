<div class="{{ $modal  ? 'block' : 'hidden' }} modal-detail fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full" x-data="{closeModal(){
        window.addEventListener('click', (event) => {
            if(event.target.classList.contains('modal-detail')){
                 $dispatch('close-modal');
             }
        });
    }}" x-init="closeModal()">

    <div class="lg:w-2/6 relative mx-auto top-[calc(100%-80%)] bg-white
     opacity-100 shadow rounded border p-6">

        <x-loading-indicator wire:loading wire:target="save"/>

        <span class="text-2xl font-bold">Create new Formatting</span>

        <form wire:submit="save" class="gap-4">
            <div class="my-2">
                <x-input-label for="name" value="Name" />
                <x-text-input class="w-full" wire:model="name" id="name" placeholder="Name" />
                <x-input-error :messages="$errors->get('name')" />
            </div>

            <div class="my-2">
                <x-input-label for="description" value="Description" />
                <x-text-input class="w-full" wire:model="description" id="description" placeholder="Description" />
                <x-input-error :messages="$errors->get('description')" />
            </div>

            <div class="my-2">
                <x-input-label for="type_id" value="Type Formatting" />
                <x-select-input name="type_id" class="w-full" wire:model="type_id">
                    <x-select.item class="normal-case" label="Select a type formatting" selected disabled/>
                    @foreach($types as $type)
                        <x-select.item :value="$type->id" :label="$type->name" class="capitalize" />
                    @endforeach
                </x-select-input>
                <x-input-error :messages="$errors->get('type_id')" />
            </div>

            <div class="mt-3 flex gap-4 justify-end">
                <x-secondary-button wire:click="$dispatch('close-modal')">Cancel</x-secondary-button>
                <x-primary-button type="submit">Save</x-primary-button>
            </div>

        </form>
    </div>

</div
    >

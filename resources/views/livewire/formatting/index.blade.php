<div>
    <div class="py-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{--  Region Create Formatting   --}}
        <livewire:formatting.create />

        {{--  Region List All Formatting   --}}
        <span class="text-2xl font-bold">List All Formatting</span>
        <x-secondary-button wire:click="$dispatchTo('formatting.create', 'show-modal')" class="float-right">Create Formatting</x-secondary-button>

        <div class="overflow-x-auto rounded-lg border border-gray-200 shadow-md my-2 ">
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <thead>
                    <tr>
                        <th class="px-6 py-2 text-normal bg-gray-200">Id</th>
                        <th class="px-6 py-2 text-normal bg-gray-200">Name Formatting</th>
                        <th class="px-6 py-2 text-normal bg-gray-200">Type Formatting</th>
                        <th class="px-6 py-2 text-normal text-center bg-gray-200"></th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                @dump($formatting->first()->toArray())
                    @foreach($formatting as $format)
                        <tr>
                            <td class="px-6 py-2 whitespace-nowrap">{{ $format->id }}</td>
                            <td class="px-6 py-2 whitespace-nowrap">{{ $format->name }}</td>
                            <td class="px-6 py-2 whitespace-nowrap">{{ $format->type }}</td>
                            <td class="px-6 py-2 whitespace-nowrap text-center">
                               <x-primary-button wire:click="edit({{ $format->id }})" class="">Gerenciar</x-primary-button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{--  EndRegion List All Formatting   --}}
    </div>
</div>

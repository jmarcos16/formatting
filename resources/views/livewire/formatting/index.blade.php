<div>
    <div class="py-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{--  Region Create Formatting   --}}
        <livewire:formatting.create />

        {{--  Region List All Formatting   --}}
        <span class="text-2xl font-bold">List All Formatting</span>
        <x-secondary-button wire:click="$dispatchTo('formatting.create', 'show-modal')" class="float-right">Create Formatting</x-secondary-button>

        <div class="overflow-x-auto rounded-lg border border-gray-200 shadow-md my-2 ">
            <table class="w-full border-collapse divide-y bg-white text-left text-sm text-gray-500">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-normal font-medium bg-gray-100">Id</th>
                        <th class="px-6 py-3 text-normal font-medium bg-gray-100">Name Formatting</th>
                        <th class="px-6 py-3 text-normal font-medium bg-gray-100">Type Formatting</th>
                        <th class="px-6 py-3 text-normal font-medium bg-gray-100">Progress</th>
                        <th class="px-6 py-3 text-normal font-medium text-end bg-gray-100"></th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    @foreach($formatting as $format)
                        <tr>
                            <td class="px-6 py-2 whitespace-nowrap">{{ $format->id }}</td>
                            <td class="px-6 py-2 whitespace-nowrap">{{ $format->name }}</td>
                            <td class="px-6 py-2 whitespace-nowrap capitalize">{{ $format->types->name }}</td>
                            <td class="px-6 py-2 whitespace-nowrap capitalize">
                                <x-badge-progress :status="$format->status" />
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-end">
                               <a href="{{route('formatting.show', $format)}}"class="text-blue-600 hover:text-blue-900" wire:navigate>Manage</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{--  EndRegion List All Formatting   --}}
    </div>
</div>

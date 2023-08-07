<div>
    <div>
        <span class="text-gray-800 dark:text-gray-100 font-semibold text-lg">Formatting Computer</span>
    </div>


    <form action="">

        <div class="py-3">
            <x-input-label for="name" :value="__('Computer Name')" />
            <x-text-input id="computer" name="computer" type="text" class="mt-1 block w-full lg:w-3/6" :value="old('computer')"
                required placeholder="Computer name" />
            <x-input-error class="mt-2" :messages="$errors->get('computer')" />
        </div>

        <div class="py-3">
            <x-input-label for="name" :value="__('Computer Name')" />
            <select name="" id=""
                class="w-full lg:w-3/6 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                <option value="" selected disabled>Select Group</option>
                <option value="">Operator</option>
                <option value="">Analyst</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('computer')" />
        </div>

        <x-primary-button>{{ __('Create Formatting') }}</x-primary-button>
    </form>

</div>

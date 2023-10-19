<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Barangay Clearance') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Barangay Clearance") }}
                </div>
            </div>
        </div>
    </div>

    <div class="px-10">
        <x-input-label for="purpose" :value="__('State your Purpose')" />

    <x-select-input-purpose id="purpose" class="block mt-1 w-full" type="text" name="purpose" :value="old('purpose')" required
    autofocus>
    </x-select-input-purpose>
    <x-input-error :messages="$errors->get('purpose')" class="mt-2" />
        <div class="w-full flex justify-end py-8">
        <x-primary-button class="ml-3">
            {{ __('Request') }}
        </x-primary-button>
    </div>
    </div>
</x-app-layout>
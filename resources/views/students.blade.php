<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-4 py-4">
            <div class="bg-white flex justify-center shadow-xl sm:rounded-lg py-2 px-2">
                @livewire('students')
            </div>
        </div>
    </div>
</x-app-layout>

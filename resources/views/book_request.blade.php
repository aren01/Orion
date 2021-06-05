<x-app-layout>
    <x-slot name="header">
      <div class="relative">
      <div class="py-3">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Book Requests') }}
        </h2>
      </div>
      <div class="absolute top-0 right-0">
        <button onclick="" class="px-12 text-white py-2 px-2 bg-green-500 rounded-lg border-2 border-white"><a href="/AddAuthor">Add Author</a></button>
      </div>
    </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-4 py-4">
            <div class="bg-white flex justify-center shadow-xl sm:rounded-lg py-2 px-2">
                @livewire('book-request')
            </div>
        </div>
    </div>
</x-app-layout>

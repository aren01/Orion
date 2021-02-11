<x-app-layout>
    <x-slot name="header">
      <div class="relative">
      <div class="py-3">
        <h2 class="font-semibold text-xl text-gray-800">
            Welcome <b>{{ Auth::user()->name }}</b>
        </h2>
      </div>
      <div class="absolute top-0 right-0">
        <button onclick="" class="px-12 text-white py-2 px-2 bg-green-500 rounded-lg border-2 border-white"><a href="/AddBook">Add Book</a></button>
      </div>
    </div>
    </x-slot>

    <div class="py-12">

        <div class="bg-white max-w-5xl mx-auto sm:px-6 lg:px-4 py-4">

            <div class="bg-white py-2 px-2">

              <h2 class=" font-semibold text-xl text-gray-800">
                  Quick Statistics

              </h2>

              <div class="bg-white flex justify-center sm:rounded-lg py-4 px-2">
                @livewire('dashboard')
            </div>
            </div>
        </div>

        <div class="bg-white max-w-5xl mx-auto sm:px-6 lg:px-4 py-4">

            <div class="bg-white py-2 px-2">
              <h2 class=" font-semibold text-base text-gray-400">
                  Kolej Universiti Poly-Tech MARA Kuala Lumpur
              </h2>
              <h2 class=" font-bold text-xl text-gray-800">
                  Orion Library Management System - Muhammad Aiman Hafiz bin Abdull Mutalib (AM1905005894)
              </h2>
              <p class="flex justify-left font-semibold text-base text-gray-800">
                  Submitted to HAFIZZ AL-AMIRRUL BIN MOHD ZANIAL (Faculty of Computing and Multimedia)
              </p>
              <p class="flex justify-left font-semibold text-base text-gray-800 py-4">
                  Problem Statement
              </p>
              <p class="flex justify-left font-semibold text-base text-gray-800 py-4">
                1. Users must search for the exact terms without any mistakes. Therefore, any records in
                the system must not have any mistakes or it will not be searchable.
                <br/>
                2. Users can not use or update the system at the same time. This will result in low
                efficiency as only one computer can access the program at a time
              </p>
              <p class="flex justify-left font-semibold text-base text-gray-800 py-4">
                  Problem Objectives
              </p>
              <p class="flex justify-left font-semibold text-base text-gray-800 py-4">
                1. To provide a search system that is more comprehensive
                <br/>
                &nbsp;&nbsp;&nbsp;&nbsp;a. The search system will be able to account for human errors, giving results for
                similar searches that the user has made.
                <br/>
                2. To provide a system that can be accessed by multiple people at a time.
                <br/>
                &nbsp;&nbsp;&nbsp;&nbsp;a. Other users will not be locked out of the system while an user is currently
                making changes in the system.
              </p>
            </div>
        </div>

    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
      <div class="relative">
      <div class="py-3">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Author') }}
        </h2>
      </div>
      <div class="absolute top-0 right-0">
        <button onclick="" class="px-12 text-white py-2 px-2 bg-green-500 rounded-lg border-2 border-white"><a href="/Authors">Back</a></button>
      </div>
    </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-4 py-4">
            <div class="bg-white flex justify-center shadow-xl sm:rounded-lg py-2 px-2">
              <div class="relative py-6">
                <div class="">
                  <div class="">

                    <div class="flex items-center space-x-12">
                      <div class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">+</div>
                      <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                        <h2 class="leading-">Edit Author</h2>
                        <p class="text-sm text-gray-500 font-normal leading-relaxed">Edit existing author in the database</p>
                      </div>
                    </div>
                    <?php
                    foreach ($authors as $author) {
                      ?>
                    <form method="post" action="/EditAuthors/<?php echo $author->id; ?>/update">

                      {{ csrf_field() }}
                      <div class="divide-y divide-gray-200">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                          <div class="flex flex-col">
                            <label class="leading-loose">Author Name</label>
                            <input type="text" wire:model="authorname" value="<?php echo $author->author; ?>" name="authorname" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Enter Author Name">
                          </div>
                          <div class="flex flex-col">
                            <label class="leading-loose">Descrption</label>
                            <input type="textbox" wire:model="authordescription" value="<?php echo $author->description; ?>" name="authordescription" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="gory Descrption">
                          </div>
                        </div>
                        <div class="pt-4 flex items-center space-x-4">
                            <button wire:click.prevent="back()" class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                              <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Cancel
                            </button>
                          <input type="submit" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">
                        </div>
                      </div>
                  </form>
                  <?php
                }
            ?>
                  </div>
                </div>
              </div>
              </div>
            </div>
        </div>
    </div>
</x-app-layout>


<div>
  <!-- <div>
    @if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
  </div> -->
  <!--
UI Design Prototype
Link : https://dribbble.com/shots/10452538-React-UI-Components
-->

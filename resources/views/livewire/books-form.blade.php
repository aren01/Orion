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

<div class="relative py-6">
  <div class="">
    <div class="">

      <div class="flex items-center space-x-12">
        <div class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">+</div>
        <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
          <h2 class="leading-">Add Book</h2>
          <p class="text-sm text-gray-500 font-normal leading-relaxed">Add a new book to the database</p>
        </div>
      </div>

      <form wire:submit.prevent="submit">

        {{ csrf_field() }}
      <div class="divide-y divide-gray-200">
        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
          <div class="flex flex-col">
            <label class="leading-loose">Book Name</label>
            <input type="text" wire:model="bookname" name="name" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Enter Book Name">
          </div>
          <!-- <div class="flex flex-col">
            <label class="leading-loose">Author</label>
            <input type="text" wire:model="authorname" name="author" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Event title">
          </div> -->

          <div class="flex flex-col">


                    <label class="leading-loose">Author</label>
                    <select name="author" wire:model="authorname" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                        <option value=''>Choose a Author</option>
                        @foreach($authors as $author)
                            <option value={{ $author->id }}>{{ $author->author }}</option>
                        @endforeach
                    </select>
          </div>


          <div class="flex flex-col">


                    <label class="leading-loose">Catagory</label>
                    <select name="category" wire:model="category" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                        <option value=''>Choose a Catagory</option>
                        @foreach($catagories as $catagory)
                            <option value={{ $catagory->id }}>{{ $catagory->catagory }}</option>
                        @endforeach
                    </select>
          </div>



          <!-- <div class="flex flex-col">
            <label class="leading-loose">Category</label>
            <input type="text" wire:model="category" name="category" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Optional">
          </div> -->
          <div class="flex flex-col">
            <label class="leading-loose">ISBN</label>
            <input type="number" wire:model="ISBN" name="isbn" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Optional">
          </div>
          <div class="flex flex-col">
            <label class="leading-loose">Price</label>
            <input type="number" wire:model="price" name="price" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Optional">
          </div>
        </div>
        <div class="pt-4 flex items-center space-x-4">
            <button wire:click.prevent="back()" class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
              <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Cancel
            </button>
            <button wire:click.prevent="store()" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Add Book</button>
        </div>
      </div>
    </form>
    </div>
  </div>
</div>
</div>

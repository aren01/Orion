<div>
	<div class="relative py-6">
		<div class="">
			<div class="">
				<div class="flex items-center space-x-12">
					<div class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">+</div>
					<div class="block pl-2 font-semibold text-xl self-start text-gray-700">
						<h2 class="leading-">Add Inventory</h2>
						<p class="text-sm text-gray-500 font-normal leading-relaxed">Add inventory to a book in the database</p>
					</div>
				</div>
				<form wire:submit.prevent="submit"> {{ csrf_field() }}
					<div class="divide-y divide-gray-200">
						<div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
							<div class="flex flex-col">
								<label class="leading-loose">Book</label>
								<select name="book" wire:model="bookname" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
									<option value=''>Select a Book</option> @foreach($books as $book)
									<option value={{ $book->id }}>{{ $book->name }}</option> @endforeach </select>
							</div>
							<div class="flex flex-col">
								<label class="leading-loose">Total Quantity</label>
								<input type="number" wire:model="quantity" name="quantity" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Total Quantity"> </div>
						</div>
						<div class="pt-4 flex items-center space-x-4">
							<button wire:click.prevent="back()" class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
								<svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
								</svg> Cancel </button>
							<button wire:click.prevent="store()" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Add Book</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

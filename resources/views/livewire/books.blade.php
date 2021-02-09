<div class="">
  <table id="table_id" class=" display table-auto">
    <thead>
      <tr>
        <th class="px-12 py-2">#</th>
        <th class="px-12 py-2">Book Name</th>
        <th class="px-12 py-2">Catagory</th>
        <th class="px-12 py-2">Author</th>
        <th class="px-12 py-2">ISBN</th>
        <th class="px-12 py-2">Price</th>
        <th class="px-12 py-4">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($books as $book) {
        ?>
      <tr>
        <td class=""><?php echo $book->id; ?></td>
        <td class=""><?php echo $book->name; ?></td>
        <td class=""><?php echo $book->catagory_id; ?></td>
        <td class=""><?php echo $book->author_id; ?></td>
        <td class=""><?php echo $book->isbn; ?></td>
        <td class=""><?php echo $book->price; ?></td>
        <td class=""><button wire:click="edit({{$book->id}})" class="py-2 px-6 text-white bg-yellow-500 rounded-lg border-2 border-white">Edit</button>
          <button wire:click="destroy({{$book->id}})" class="py-2 px-6 text-white bg-red-500 rounded-lg border-2 border-white">Delete</button>
        </td>

      </tr>

      <?php
}
?>
    </tbody>
  </table>
</div>

<div class="py-12">
  <table id="table_id" class="py-12 px-12 display table-auto">
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
        <td class="px-12 py-2"><?php echo $book->id; ?></td>
        <td class="px-12 py-2"><?php echo $book->name; ?></td>
        <td class="px-12 py-2"><?php echo $book->catagory; ?></td>
        <td class="px-12 py-2"><?php echo $book->author; ?></td>
        <td class="px-12 py-2">ISBN <?php echo $book->isbn; ?></td>
        <td class="px-12 py-2">RM <?php echo $book->price; ?></td>
        <td class="px-12 py-2"><button class="py-2 px-6 text-white bg-yellow-500 rounded-lg border-2 border-white"><a href="/EditBooks/{{$book->id}}">Edit</a></button>
          <button wire:click="destroy({{$book->id}})" class="py-2 px-6 text-white bg-red-500 rounded-lg border-2 border-white">Delete</button>
        </td>

      </tr>

      <?php
}
?>
    </tbody>
  </table>
</div>

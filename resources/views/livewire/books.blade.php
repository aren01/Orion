<div class="">
  <table class="table-auto">
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
        <td class=""><?php echo $book->catagory; ?></td>
        <td class=""><?php echo $book->author; ?></td>
        <td class=""><?php echo $book->isbn; ?></td>
        <td class=""><?php echo $book->price; ?></td>
    
      </tr>

      <?php
}
?>
    </tbody>
  </table>
</div>

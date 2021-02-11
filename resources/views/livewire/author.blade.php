<div class="py-12 px-12">
  <table id="table_id" class="py-12 px-12 display table-auto">
    <thead>
      <tr>
        <th class="px-12 py-2">#</th>
        <th class="px-12 py-2">Author Name</th>
        <th class="px-12 py-2">Descrption</th>
        <th class="px-12 py-2">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($authors as $author) {
        ?>
      <tr>
        <td class=""><?php echo $author->id; ?></td>
        <td class=""><?php echo $author->author; ?></td>
        <td class=""><?php echo $author->description; ?></td>
        <td class=""><button class="py-2 px-6 text-white bg-yellow-500 rounded-lg border-2 border-white"><a href="/EditAuthors/{{$author->id}}">Edit</a>
          <button wire:click="destroy({{$author->id}})" class="py-2 px-6 text-white bg-red-500 rounded-lg border-2 border-white">Delete</button>
        </td>

      </tr>

      <?php
}
?>
    </tbody>
  </table>
</div>

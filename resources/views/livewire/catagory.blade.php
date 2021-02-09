<div class="py-12 px-12">
  <table id="table_id" class="py-12 px-12 display table-auto">
    <thead>
      <tr>
        <th class="px-12 py-2">#</th>
        <th class="px-12 py-2">Catagory Name</th>
        <th class="px-12 py-2">Descrption</th>
        <th class="px-12 py-2">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($catagory as $catagories) {
        ?>
      <tr>
        <td class=""><?php echo $catagories->id; ?></td>
        <td class=""><?php echo $catagories->catagory; ?></td>
        <td class=""><?php echo $catagories->description; ?></td>
        <td class=""><button wire:click="edit({{$catagories->id}})" class="py-2 px-6 text-white bg-yellow-500 rounded-lg border-2 border-white">Edit</button>
          <button wire:click="destroy({{$catagories->id}})" class="py-2 px-6 text-white bg-red-500 rounded-lg border-2 border-white">Delete</button>
        </td>

      </tr>

      <?php
}
?>
    </tbody>
  </table>
</div>

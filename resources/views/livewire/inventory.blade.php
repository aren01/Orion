<div class="py-12 px-12">
  <table id="table_id" class="py-12 px-12 display table-auto">
    <thead>
      <tr>
        <th class="px-12 py-2"># / Book ID</th>
        <th class="px-12 py-2">Book Name</th>
        <th class="px-12 py-2">Current Quantity</th>
        <th class="px-12 py-2">In Circulation</th>
        <th class="px-12 py-2">Total</th>
        <th class="px-12 py-2">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($inventories as $inventory) {
        ?>
      <tr>
        <td class=""><?php echo $inventory->id; ?></td>
        <td class=""><?php echo $inventory->name; ?></td>
        <td class=""><?php echo $inventory->current; ?></td>
        <td class=""><?php echo $inventory->incirculation; ?></td>
        <td class=""><?php echo $inventory->total; ?></td>
        <td class="px-12 py-2"><button class="py-2 px-6 text-white bg-yellow-500 rounded-lg border-2 border-white"><a href="/EditInventory/{{$inventory->id}}">Edit</a></button>
        </td>


      </tr>

      <?php
}
?>
    </tbody>
  </table>
</div>

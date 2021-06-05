<div class="py-12 px-12">
  <table id="table_id" class="py-12 px-12 display table-auto">
    <thead>
      <tr>
        <th class="px-12 py-2">#</th>
        <th class="px-12 py-2">Name</th>
        <th class="px-12 py-2">Email</th>
        <th class="px-12 py-2">Created on</th>
        <th class="px-12 py-2">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($students as $student) {
        ?>
      <tr>
        <td class=""><?php echo $student->id; ?></td>
        <td class=""><?php echo $student->name; ?></td>
        <td class=""><?php echo $student->email; ?></td>
        <td class=""><?php echo $student->created_at; ?></td>
        <td>
          <!-- <button wire:click="" class="py-2 px-6 text-white bg-red-500 rounded-lg border-2 border-white">Make Admin</button>
          <button wire:click="" class="py-2 px-6 text-white bg-red-500 rounded-lg border-2 border-white">Disable</button> -->
        </td>


      </tr>

      <?php
}
?>
    </tbody>
  </table>
</div>

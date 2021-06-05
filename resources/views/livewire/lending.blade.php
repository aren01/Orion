<div class="py-12 px-12">
  <table id="table_id" class="py-12 px-12 display table-auto">
    <thead>
      <tr>
        <th class="px-12 py-2">Lend ID</th>
        <th class="px-12 py-2"># / Book ID</th>
        <th class="px-12 py-2">Book Name</th>
        <th class="px-12 py-2">Student Name</th>
        <th class="px-12 py-2">Lend Date</th>
        <th class="px-12 py-2">Return Date</th>
        <th class="px-12 py-2">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($lends as $lend) {

        ?>
      <tr>
        <td class=""><?php echo $lend->id; ?></td>
        <td class=""><?php echo $lend->book_id; ?></td>
        <td class=""><?php echo $lend->bookname; ?></td>
        <td class=""><?php echo $lend->username; ?></td>
        <td class=""><?php echo $lend->lend_date; ?></td>
        <td class=""><?php echo $lend->return_date; ?></td>
        <td class=""><button wire:click="destroy({{$lend->id}})" class="py-2 px-4 text-white bg-green-500 rounded-lg border-2 border-white">Mark as Returned</button>
                               <!-- <button class="py-2 px-4 text-white bg-red-500 rounded-lg border-2 border-white"><a href="/EditInventory/{{$lend->id}}">Log as Lost</a></button> -->
        </td>


      </tr>

      <?php

}

?>
    </tbody>
  </table>
</div>

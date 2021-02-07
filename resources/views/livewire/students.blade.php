<div class="">
  <table class="table-auto">
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
        <td><button class="text-white hover:text-red-500 py-2 px-2 bg-red-500 hover:bg-white rounded-lg border-2 border-grey-500">Hover me</button> </td>


      </tr>

      <?php
}
?>
    </tbody>
  </table>
</div>

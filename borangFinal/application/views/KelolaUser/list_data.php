<?php
  foreach ($dataUser as $user) {
    ?>
    <tr>
      <td style="min-width:230px;"><?php echo $user->username; ?></td>
      <td><?php echo $user->firstname; ?></td>
      <td><?php echo $user->lastname; ?></td>
      <td><?php echo $user->role_name; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataUser" data-id="<?php echo $user->user_id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-dataUser" data-id="<?php echo $user->user_id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?>
<div style="padding: 20px">
  <table align="center" width="100%">
    <tr>
    	<th>username</th>
      <th>phone</th>
      <th>address</th>
      <th>email</th>
      <th>date registered</th>
      <th>option</th>
    </tr>
    <?php foreach($users as $key => $values){ ?>
    <tr style="border: 1px solid #000">
			<td align="center"><?php echo $values['username']; ?></td>
      <td align="center"><?php echo $values['phone']; ?></td>
      <td align="center"><?php echo $values['address']; ?></td>
      <td align="center"><?php echo $values['email']; ?></td>
      <td align="center"><?php echo date("Y-m-d", strtotime($values['create_at'])); ?></td>
      <td align="center">
      	<a onClick="return confirm('Delete contact?');" href="admin/users/delete/<?php echo $values['id']; ?>"><img src="./images/admin/b_drop.png" title="delete" /></a>
    </tr>
    <?php } ?>
  </table>
</div>
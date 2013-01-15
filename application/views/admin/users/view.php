<div style="padding: 20px">
  <table align="center" width="100%">
    <tr>
    	<th>username</th>
      <th>phone</th>
      <th>address</th>
      <th>email</th>
      <th>date sent</th>
    </tr>
    <?php foreach($users as $key => $values){ ?>
    <tr style="border: 1px solid #000">
			<td><?php echo $values['username']; ?></td>
      <td><?php echo $values['phone']; ?></td>
      <td><?php echo $values['address']; ?></td>
      <td><?php echo $values['email']; ?></td>
      <td width="80"><?php echo date("Y-m-d", strtotime($values['create_at'])); ?></td>
      <td>
      	<a href="admin/edit_user/<?php echo $values['id']; ?>">edit</a> | <a onClick="return confirm('Delete contact?');" href="admin/delete_user/<?php echo $values['id']; ?>">del</a>
       </td>
    </tr>
    <?php } ?>
  </table>
</div>
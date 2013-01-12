<div style="padding: 20px">
  <table align="center" width="100%">
    <tr>
    	<th>name</th>
      <th>phone</th>
      <th>address</th>
      <th>email</th>
      <th>message</th>
      <th>date sent</th>
      <th>option</th>
    </tr>
    <?php foreach($contacts as $key => $values){ ?>
    <tr style="border: 1px solid #000">
			<td><?php echo $values['name']; ?></td>
      <td><?php echo $values['phone']; ?></td>
      <td><?php echo $values['address']; ?></td>
      <td><?php echo $values['email']; ?></td>
      <td width="250"><?php echo $values['message']; ?></td>
      <td width="80"><?php echo date("Y-m-d", strtotime($values['created_at'])); ?></td>
      <td>
      	<a href="admin/edit_contact/<?php echo $values['id']; ?>">edit</a> | <a onClick="return confirm('Delete contact?');" href="admin/delete_contact/<?php echo $values['id']; ?>">del</a>
       </td>
    </tr>
    <?php } ?>
  </table>
</div>
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
			<td align="center"><?php echo $values['name']; ?></td>
      <td align="center"><?php echo $values['phone']; ?></td>
      <td align="center"><?php echo $values['address']; ?></td>
      <td align="center"><?php echo $values['email']; ?></td>
      <td align="center"><?php echo $values['message']; ?></td>
      <td align="center"><?php echo date("Y-m-d", strtotime($values['created_at'])); ?></td>
      <td align="center">
      	<a onClick="return confirm('Delete contact?');" href="admin/contacts/delete/<?php echo $values['id']; ?>"><img src="./images/admin/b_drop.png" title="delete" /></a>
       </td>
    </tr>
    <?php } ?>
  </table>
</div>
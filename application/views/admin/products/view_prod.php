<div style="padding: 20px">
	 <table align="center" width="100%">
   <tr>
	 		<?php {?>
      	<a href="admin/add_product"><h3>add product</h3></a>
			<?php  }?>
   </tr>
    <tr>
    	<th>Product name</th>
      <th>price</th>
      <th>description</th>
      <th>option</th>
    </tr>
    <?php foreach($products as $key => $values){ ?>
    <tr style="border: 1px solid #000">
			<td><?php echo $values['prod_name']; ?></td>
      <td><?php echo $values['prod_price']; ?></td>
      <td width="250"><?php echo $values['description']; ?></td>
      <td width="80"><?php echo date("Y-m-d", strtotime($values['created_at'])); ?></td>
      <td>
      	<a href="admin/edit_product/<?php echo $values['id']; ?>">update</a> | <a onClick="return confirm('Delete contact?');" href="admin/delete_product/<?php echo $values['id']; ?>">del</a>
       </td>
    </tr>
    <?php } ?>
  </table>
</div>
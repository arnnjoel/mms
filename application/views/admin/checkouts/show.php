<div style="padding: 20px">
	 <table align="center" width="100%">
    <tr>
    	<th>Product name</th>
      <th>price</th>
      <th>quantity</th>
      <th>total</th>
      <th>date purchased</th>
      
    </tr>
    
    <?php if(!empty($checkouts)) { ?>
			<?php foreach($checkouts as $key => $values){ ?>
      <tr align="center">
      	<td><?php echo $values['name'] ?></td>
      	<td><?php echo $values['price'] ?> USD</td>
      	<td><?php echo $values['quantity'] ?> PCS</td>
      	<td><?php echo $values['price'] * $values['quantity']?> USD</td>
      	<td><?php echo $values['created_at'] ?></td>
      </tr>
      <?php }?>
       <tr>
      	<td colspan="5" align="center"><?php echo $this->pagination->create_links(); ?></td>
      </tr>
    <?php }?>
    
  </table>
</div>
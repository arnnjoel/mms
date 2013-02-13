<div style="padding: 20px">
	 <table align="center" width="100%">
    <tr>
    	<th>Buyer</th>
    	<th>Product name</th>
      <th>price</th>
      <th>quantity</th>
      <th>total</th>
      <th>date purchased</th>
      
    </tr>
    
    <?php if(!empty($checkouts)) { ?>
			<?php foreach($checkouts as $key => $values){ ?>
      <tr align="center">
      	<td><span class="tooltip" title="<?php echo "&bull; Email: {$values['email']} &bull; Phone: {$values['phone']} &bull; Address: {$values['address']}"; ?>"><?php echo $values['username'] ?></span></td>
      	<td><?php echo $values['name'] ?></td>
      	<td><?php echo $values['price'] ?> PHP</td>
      	<td><?php echo $values['quantity'] ?> PCS</td>
      	<td><?php echo $values['price'] * $values['quantity']?> PHP</td>
      	<td><?php echo $values['created_at'] ?></td>
      </tr>
      <?php }?>
       <tr>
      	<td colspan="5" align="center"><?php echo $this->pagination->create_links(); ?></td>
      </tr>
    <?php }?>
    
  </table>
</div>
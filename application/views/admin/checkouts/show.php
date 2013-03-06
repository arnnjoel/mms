<div style="padding: 20px">
	 <table align="center" width="100%">
    <tr>
    	<th>Buyer</th>
    	<th>Product name</th>
      <th>price</th>
      <th>quantity</th>
      <th>total</th>
      <th>date purchased</th>
      <th>delivery</th>
      
    </tr>
    
    <?php if(!empty($checkouts)) { ?>
			<?php foreach($checkouts as $key => $values){ ?>
      <tr align="center">
      	<td><span class="tooltip" title="<?php echo "&bull; Email: {$values['email']} &bull; Phone: {$values['phone']} &bull; Address: {$values['address']}"; ?>"><?php echo $values['username'] ?></span></td>
      	<td><?php echo $values['name'] ?></td>
      	<td><?php echo $values['price'] ?> PHP</td>
      	<td><?php echo $values['quantity'] ?> PCS</td>
      	<td><?php echo $values['price'] * $values['quantity']?> PHP</td>
      	<td align="center"><?php echo date("Y-m-d", strtotime($values['created_at'])); ?></td>
        <td>
        <?php if ($values['status'] != 'delivered') { ?>
        		<form method="post" action="">
            		<input type="hidden" name="id" value="<?php echo $values['checkout_id'] ?>" />
        				<select name="status">
  							<option<?php echo empty($values['status']) ? "" : ' selected="selected"' ?> value="pending">pending</option>
                <option<?php echo $values['status'] == 'delivered' ? ' selected="selected"' : '' ?> value="delivered">delivered</option>
								</select>
                <input type="submit" name="submit" value="save">
        		</form>
          <?php }else{ ?>
          <?php echo $values['status'] ?>
          <?php } ?>
         </td>
      </tr>
      <?php }?>
       <tr>
      	<td colspan="5" align="center"><?php echo $this->pagination->create_links(); ?></td>
      </tr>
    <?php }?>
    
  </table>
</div>
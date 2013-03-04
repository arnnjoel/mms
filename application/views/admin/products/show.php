<div style="padding: 20px">
	<div>
  	<a href="admin/products/add"><h3>add product</h3></a>
  </div>
  <form method="post" action="">
      	<label>
        	Search: 
          <input type="text" name="search" value="<?php echo !empty($_POST) ? $_POST['search'] : '' ?>" />
        </label>
        <select name="category">
					<?php foreach($categories as $key => $values) { ?>
					<option value="<?php echo $values['id'] ?>"><?php echo $values['category_name'] ?></option>
				<?php } ?>
				</select>
        <input type="submit" name="submit" value="Search" />
      </form>
	 <table align="center" width="100%">
    <tr>
    	<th>Product name</th>
      <th>price</th>
      <th>description</th>
      <th>quantity</th>
      <th>category</th>
      <th>option</th>
      
    </tr>
    <?php if(!empty($products)) { ?>
			<?php foreach($products as $key => $values){ ?>
      <tr style="border: 1px solid #000">
        <td align="center"><?php echo $values['name']; ?></td>
        <td align="center"><?php echo $values['price']; ?></td>
        <td align="center" title="<?php echo $values['description']; ?>">
				<?php 
				$desc = strlen($values['description']) > 50 ? substr($values['description'], 0, 50) . '...' : $values['description'];
				echo $desc; 
				?>
        </td>
        <td align="center"><?php echo $values['quantity']; ?></td>
        <td align="center"><?php echo $values['category_name']; ?></td>
        <td align="center">
          <a href="admin/products/edit/<?php echo $values['id']; ?>"><img src="./images/admin/b_edit.png" title="edit" /></a> <a onClick="return confirm('Delete product?');" href="admin/products/delete/<?php echo $values['id']; ?>"><img src="./images/admin/b_drop.png" title="delete" /></a>
         </td>
      </tr>
      
      <?php } ?>
      <tr>
      	<td colspan="6" align="center"><?php echo $this->pagination->create_links(); ?></td>
      </tr>
    <?php }else{ ?>
    <tr style="border: 1px solid #000">
    	<td colspan="5">&nbsp;</td>
    </tr>
    <tr style="border: 1px solid #000">
    	<td colspan="5"><center><b style="font-size: 16px">No Products</b></center></td>
    </tr>
    <?php } ?>
  </table>
</div>
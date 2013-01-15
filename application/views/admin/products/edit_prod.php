<table>
	<tr>
  	<td>Product name</td>
    <td><input type="text" name="name" value="<?php echo $result['prod_name']; ?>" /></td>
    <td>price</td>
    <td><input type="text" name="price" value="<?php echo $result['prod_price']; ?>" /></td>
    <td>description</td>
    <td><input type="message" name="description" value="<?php echo $result['description']; ?>" /></td>
    <td><input type="submit" name = "save" class="register" value="update" /></td>
  </tr>
</table>
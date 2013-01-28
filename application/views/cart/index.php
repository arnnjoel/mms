<div class="left_content">
	<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>My cart</div>

  <div class="feat_prod_box_details">
    
    <table class="cart_table">
    
      <tr class="cart_title">
        <td>Item pic</td>
        <td>Part name</td>
        <td>Unit price</td>
        <td>Qty</td>
      <td>Total</td>               
      </tr>
      <?php foreach($this->cart->contents() as $items) { ?>
      <tr>
        <td><a href="details/item/<?php echo $items['id']; ?>"><img src="images/uploads/<?php echo $items['options']['image'] ?>" width="56" alt="" title="" border="0" class="cart_thumb" /></a></td>
        <td><?php echo $items['name']; ?></td>
        <td><?php echo number_format($items['price'], 2); ?> PHP</td>
        <td><?php echo $items['qty']; ?></td>
        <td><?php echo number_format($items['qty'] * $items['price'], 2); ?> PHP</td>               
      </tr>          
			<?php } ?>
      <tr>
        <td colspan="4" class="cart_total"><span class="red">TOTAL:</span></td>
        <td><?php echo number_format($this->cart->total(), 2); ?> PHP</td>                
      </tr>                  
    
    </table>
    <a href="cart/checkout" class="checkout">checkout &gt;</a>
    
  </div>	
	<div class="clear"></div>
</div><!--end of left content-->
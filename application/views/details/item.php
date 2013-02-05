<div class="center_content">
  <div class="left_content">
    <div class="crumb_nav">
      <a href="home/index">home</a> &gt;&gt; <?php echo $name; ?>
      </div>
      <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span><?php echo $name; ?></div>
  
    <div class="feat_prod_box_details">
      
        <div class="prod_img"><a href="details/item/<?php echo $id; ?>"><img src="images/uploads/<?php echo $image; ?>" width="119" alt="" title="" border="0"></a></div>
          
          <div class="prod_det_box">
            <div class="box_top"></div>
              <div class="box_center">
              <form method="post" action="cart/add/<?php echo $id; ?>">
              <div class="prod_title"><?php echo $name; ?></div>
              <p class="details"><?php echo str_replace("\n", '<br />', $description); ?></p>
              <div class="price"><strong>PRICE:</strong> <span class="red"><?php echo number_format($price, 2); ?> $</span></div>
              <div class="price">
                <strong>QUANTITY:</strong> 
                <span class="colors">
                	<select name="quantity">
                  	<?php for($i = 1; $i <= $quantity; $i++) { ?>
                    <option><?php echo $i; ?></option>
                    <?php } ?> 
                  </select>
                </span>
              </div>
              <input type="image" src="images/order_now.gif" name="submit" value="Order now" class="more" style="margin-left: 180px" />
              <div class="clear"></div>
              </form>
              </div>
              
              <div class="box_bottom"></div>
          </div>    
  	<div class="clear"></div>
	</div>    
        <div class="clear"></div>
</div><!--end of left content-->
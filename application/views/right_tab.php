
<div class="right_content">

  <div class="cart">
  	<?php if ($this->session->userdata('username') != ''): ?>
  	<div>Welcome <?php echo $this->session->userdata('username') . ' (<a href="account/edit">Update profile</a>)'; ?></div>
    <?php endif; ?>
    <div class="title"><span class="title_icon"><img src="images/cart.gif" alt="" title=""></span>My cart</div>
    <div class="home_cart_content">
    	<?php echo $this->cart->total_items(); ?> x items | <span class="red">TOTAL: <?php echo number_format($this->cart->total(), 2); ?> PHP</span>
    </div>
    <a href="cart" class="view_cart">view cart</a>
  </div>
  
  <div class="title"><span class="title_icon"><img src="images/bullet3.gif" alt="" title=""></span>About Our Shop</div>
  
  <div class="about">
    <p>
      <img src="images/about.gif" alt="" title="" class="right">
      MMS SURPLUS CENTER sell different kinds of surplus vehicles, and auto parts including heavy trucks and vans.
    </p>   
   </div>
   
   <?php if (!empty($best_seller)) {?>
	<div class="right_box"> 
   	<div class="title"><span class="title_icon"><img src="images/bullet4.gif" alt="" title="" /></span>Best Seller</div> 
   <?php foreach($best_seller as $values) {?>
    <div class="new_prod_box">
      <a href="details/item/<?php echo $values['product_id']?>"><?php echo $values['name']?></a>
      <div class="new_prod_bg">
      <a href="details/item/<?php echo $values['product_id']?>"><img src="images/uploads/<?php echo $values['image']?>" width="83" alt="" title="" class="thumb" border="0" /></a>
      </div>           
    </div>
   <?php } ?>
	</div>
	<?php } ?>
	<div class="right_box">
  	<div class="title"><span class="title_icon"><img src="images/bullet5.gif" alt="" title=""></span>Categories</div>
  	<ul class="list">
    	<?php foreach($categories as $key => $values){ ?>
      <li><a href="./categories/category/<?php echo $values['id'] ?>"><?php echo $values['category_name'] ?></a></li>
      <?php } ?>
    </ul>
  </div>

</div>
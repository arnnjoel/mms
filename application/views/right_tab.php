
<div class="right_content">

  <div class="cart">
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

  <div class="right_box">
    <div class="title"><span class="title_icon"><img src="images/bullet4.gif" alt="" title=""></span>Promotions</div>
    
    <div class="new_prod_box">
      <a href="details.html">product name</a>
      <div class="new_prod_bg">
        <span class="new_icon"><img src="images/promo_icon.gif" alt="" title=""></span>
        <a href="details.html"><img src="images/thumb1.gif" alt="" title="" class="thumb" border="0"></a>
      </div>           
    </div>
    
    <div class="new_prod_box">
      <a href="details.html">product name</a>
      <div class="new_prod_bg">
        <span class="new_icon"><img src="images/promo_icon.gif" alt="" title=""></span>
        <a href="details.html"><img src="images/thumb1.gif" alt="" title="" class="thumb" border="0"></a>
      </div>           
    </div>
    
    <div class="new_prod_box">
      <a href="details.html">product name</a>
      <div class="new_prod_bg">
        <span class="new_icon"><img src="images/promo_icon.gif" alt="" title=""></span>
        <a href="details.html"><img src="images/thumb1.gif" alt="" title="" class="thumb" border="0"></a>
      </div>           
    </div>            
  
  </div>
  
	<div class="right_box">
  	<div class="title"><span class="title_icon"><img src="images/bullet5.gif" alt="" title=""></span>Categories</div>
  	<ul class="list">
    	<?php foreach($categories as $key => $values){ ?>
      <li><a href="./categories/category/<?php echo $values['id'] ?>"><?php echo $values['category_name'] ?></a></li>
      <?php } ?>
    </ul>
  </div>

</div>
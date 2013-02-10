<div class="left_content">
  <div class="crumb_nav"><a href="">home</a> &gt;&gt; Products</div>
  <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Products</div>
  
	<div class="new_products">
  	<div class="search">
    	<form method="post" action="">
      	<label>
        	Search: 
          <input type="text" name="search" value="<?php echo !empty($_POST) ? $_POST['search'] : '' ?>" />
        </label>
        <input type="submit" name="submit" value="Search" />
      </form>
    </div>
  	<?php if (!empty($products)): ?>
  	<?php foreach($products as $value): ?>
    <div class="new_prod_box">
      <a href="details/item/<?php echo$value['id'] ?>"><?php echo$value['name'] ?></a>
      <div class="new_prod_bg">
        <a href="details/item/<?php echo$value['id'] ?>" title="Price: <?php echo$value['price'] ?> PHP"><img src="images/uploads/<?php echo$value['image'] ?>" width="83" alt="" title="" class="thumb" border="0" /></a>
      </div>           
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
    <div class="pagination"><?php echo $this->pagination->create_links(); ?></div>
  </div>
</div>
<!--end of left content-->
<?php /*?><?php echo $name ?>

<?php foreach($products as $key => $value) { ?>
<?php echo $value['name']; ?>
<?php echo $value['id']; ?>
<?php echo $value['image']; ?>
<?php } ?>

<?php */?>
       	<div class="left_content">
        	<div class="crumb_nav">
            <a href="home/index">home</a> &gt;&gt; <?php echo $name; ?>
            </div>
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span><?php echo $name; ?></div>
           <div class="new_products">
					 <?php foreach($products as $key => $value) { ?>
           
                    <div class="new_prod_box">
                        <a href="details/item/<?php echo $value['id']; ?>"><?php echo $value['name']; ?></a>
                        <div class="new_prod_bg">
                        <a href="details/item/<?php echo $value['id']; ?>"><img src="images/uploads/<?php echo $value['image']; ?>" alt="" width="82" title="" class="thumb" border="0"></a>
                        </div>           
                    </div>
                  <?php echo $this->pagination->create_links(); ?>
            <?php } ?>
            </div> 
          
            
        <div class="clear"></div>
        </div><!--end of left content-->
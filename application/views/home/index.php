<div class="left_content">
        	
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title=""></span>Featured products</div>
        	<?php foreach($featured as $key => $values){ ?>
        	<div class="feat_prod_box">
            
            	<div class="prod_img"><a href="details/item/<?php echo $values['id']; ?>"><img src="images/uploads/<?php echo $values['image']; ?>" width="119" alt="" title="" border="0"></a></div>
                
                <div class="prod_det_box">
                	<div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title"><?php echo $values['name']; ?></div>
                    <p class="details"><?php echo str_replace("\n", '<br />', $values['description']); ?></p>
                    <a href="details/item/<?php echo $values['id']; ?>" class="more">- more details -</a>
                    <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div>    
            <div class="clear"></div>
            </div>	
            <?php } ?>
               
           <div class="title"><span class="title_icon"><img src="images/bullet2.gif" alt="" title=""></span>New products</div> 
           
           <div class="new_products">
           					<?php foreach($new as $key => $values){ ?>
                    <div class="new_prod_box">
                        <a href="details/item/<?php echo $values['id']; ?>"><?php echo $values['name']; ?></a>
                        <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/new_icon.gif" alt="" title=""></span>
                        <a href="details/item/<?php echo $values['id']; ?>"><img src="images/uploads/<?php echo $values['image']; ?>" alt="" width="82" title="" class="thumb" border="0"></a>
                        </div>           
                    </div>
                    <?php } ?>
            </div> 
          
            
        <div class="clear"></div>
        </div>
<div class="left_content">
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Add Product</div>
        
        	<div class="feat_prod_box_details">
            <p class="details">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
            </p>
            
              	<div class="contact_form">
                <div class="form_subtitle">add new product</div>
                 <form name="register" method="post" action="" enctype="multipart/form-data">          
                    <div class="form_row">
                    <label class="contact"><strong>name:</strong></label>
                    <input type="text" name="name" class="contact_input" value="<?php echo $name; ?>" />
                    </div>  


                    <div class="form_row">
                    <label class="contact"><strong>price:</strong></label>
                    <input type="text" name="price" class="contact_input" value="<?php echo $price; ?>" />
                    </div> 
                    
                    
                    <div class="form_row">
                    <label class="contact"><strong>description:</strong></label>
                    <textarea name="description" class="contact_textarea"><?php echo $description; ?></textarea>
                    </div>                    

                    <div class="form_row">
                    <label class="contact"><strong>quantity:</strong></label>
                    <select name="quantity">
                    	<?php for($i = 1; $i <= 100; $i++){ ?>
                      <option<?php echo $quantity == $i ? ' selected="selected"' : ''; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php } ?>
                    </select>
                    </div>
                    
                    <div class="form_row">
                    <label class="contact"><strong>category:</strong></label>
                    <select name="category">
                    	<?php foreach($categories as $key => $values){ ?>
                      <option<?php echo $category_id == $values['id'] ? ' selected="selected"' : ''; ?> value="<?php echo $values['id']; ?>"><?php echo $values['category_name']; ?></option>
                       <?php } ?>
                    </select>
                    </div>
                    
                    <div class="form_row">
                    <label class="contact"><strong>image:</strong></label>
                    <img src="./images/uploads/<?php echo $image; ?>" alt="image" width="200" />
                    </div>
										
                    <div class="form_row">
                    <label class="contact">&nbsp;</label>
                    <input type="file" name="image" />
                    </div>

                    
                    <div class="form_row">
                    <input type="submit" class="register" value="edit" name="submit"/>
                    </div>  
                     
                    
                  </form>     
                </div>  
            
          </div>	
            
              

            

            
        <div class="clear"></div>
        </div><!--end of left content-->
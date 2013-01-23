<div class="left_content">
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Add Product</div>
        
        	<div class="feat_prod_box_details">
            <p class="details">
             Add product name, product price, description, quantity, category, and image.
            </p>
            
              	<div class="contact_form">
                <div class="form_subtitle">add new product</div>
                 <form name="register" method="post" action="" enctype="multipart/form-data">          
                    <div class="form_row">
                    <label class="contact"><strong>name:</strong></label>
                    <input type="text" name="name" class="contact_input" />
                    </div>  


                    <div class="form_row">
                    <label class="contact"><strong>price:</strong></label>
                    <input type="text" name="price" class="contact_input" />
                    </div> 
                    
                    
                    <div class="form_row">
                    <label class="contact"><strong>description:</strong></label>
                     <textarea name="description" class="contact_textarea"></textarea>
                    </div>                    

                    <div class="form_row">
                    <label class="contact"><strong>quantity:</strong></label>
                    <select name="quantity">
                    	<?php for($i = 1; $i <= 100; $i++){ ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php } ?>
                    </select>
                    </div>
                    
                    <div class="form_row">
                    <label class="contact"><strong>category:</strong></label>
                    <select name="category">
                    	<?php foreach($categories as $key => $values){ ?>
                      <option value="<?php echo $values['id']; ?>"><?php echo $values['category_name']; ?></option>
                      <?php } ?>
                    </select>
                    </div>
                    
                    <div class="form_row">
                    <label class="contact"><strong>image:</strong></label>
                    <input type="file" name="image" />
                    </div>

                    
                    <div class="form_row">
                    <input type="submit" class="register" value="Add" name="submit"/>
                    </div>  
                     
                     <?php
										 	if (!empty($_GET)){
												
										 ?>
                     <div class="form_row">
                   		<h3 class="reg_success">SUCCESFULLY REGISTERED!</h3>
                    </div> 
                    <?php
										 }
										?>
                  </form>     
                </div>  
            
          </div>	
            
              

            

            
        <div class="clear"></div>
        </div><!--end of left content-->
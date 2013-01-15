<div class="left_content">
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Register</div>
        
        	<div class="feat_prod_box_details">
            <p class="details">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
            </p>
            
              	<div class="contact_form">
                <div class="form_subtitle">add new product</div>
                 <form name="register" method="post" action="register/add">          
                    <div class="form_row">
                    <label class="contact"><strong>product name:</strong></label>
                    <input type="text" name="prod_name" class="contact_input" />
                    </div>  


                    <div class="form_row">
                    <label class="contact"><strong>price:</strong></label>
                    <input type="text" name="prod_price" class="contact_input" />
                    </div> 
                    
                    
                    <div class="form_row">
                    <label class="contact"><strong>description:</strong></label>
                    <input type="text" name="description" class="contact_input" />
                    </div>                    

                    

                    
                    <div class="form_row">
                    <input type="submit" class="register" value="register" name="submit"/>
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
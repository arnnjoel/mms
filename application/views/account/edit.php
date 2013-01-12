<div class="left_content">
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>My account</div>
        
        	<div class="feat_prod_box_details">
            <p class="details">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
            </p>
            
              	<div class="contact_form">
                <div class="form_subtitle">Update your account</div>
                 <form name="register" method="post" action="account/update">          
                    <div class="form_row">
                    <label class="contact"><strong>Username:</strong></label>
                     <label class="contact"><strong><?php echo $username ?></strong></label>
                    </div>  

                    <div class="form_row">
                    <label class="contact"><strong>Email:</strong></label>
                    <input type="text" name="email" class="contact_input" value="<?php echo $email ?>" />
                    </div>


                    <div class="form_row">
                    <label class="contact"><strong>Phone:</strong></label>
                    <input type="text" name="phone" class="contact_input" value="<?php echo $phone ?>" />
                    </div>
                    
                    
                    <div class="form_row">
                    <label class="contact"><strong>Address:</strong></label>
                    <input type="text" name="address" class="contact_input" value="<?php echo $address ?>" />
                    </div>                    
                    
                    <div class="form_row">
                    <input type="submit" class="register" value="update" name="submit"/>
                    </div>  
                	</form>
                </div>  
            
            </div>	
            
              

            

            
        <div class="clear"></div>
        </div><!--end of left content-->
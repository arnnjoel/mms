<div class="left_content">
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>My account</div>
        
        	<div class="feat_prod_box_details">
            <p class="details">
             Log-in to your account and search for some high quality products
            </p>
            
              	<div class="contact_form">
                <div class="form_subtitle">login into your account</div>
                 <form name="register" method="post" action=""> 
                 		<?php if (!empty($_GET) && $_GET['type'] == 'checkout') { ?>
                    <div class="form_row">
                    	<h2 style="margin: 0; text-align: center">Please login to continue checkout.</h2>
                    </div>
                    <?php } ?>
                       
                    <div class="form_row">
                    <label class="contact"><strong>Username:</strong></label>
                    <input type="text" name = "username" class="contact_input" />
                    </div>  


                    <div class="form_row">
                    <label class="contact"><strong>Password:</strong></label>
                    <input type="password" name = "password" class="contact_input" />
                    </div>                     

                    <div class="form_row">
                        <div class="terms">
                        <a href="register">Create an account</a>
                        </div>
                    </div> 

                    
                    <div class="form_row">
                    <input type="submit" name = "submit" class="register" value="login" />
                    </div>   
                    
                  </form>     
                    
                </div>  
            
            </div>	
            
              

            

            
        <div class="clear"></div>
        </div><!--end of left content-->
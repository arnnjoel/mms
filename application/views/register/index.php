<div class="left_content">
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Register</div>
        
        	<div class="feat_prod_box_details">
            <p class="details">
             JOIN US to get our regular updates of our latest products.
            </p>
            
              	<div class="contact_form">
                <div class="form_subtitle">create new account</div>
                 <form name="register" method="post" action="register/add" id="mms_register">          
                    <div class="form_row">
                    <label class="contact"><strong>Username:</strong></label>
                    <input type="text" name="username" class="contact_input" />
                    </div>  


                    <div class="form_row">
                    <label class="contact"><strong>Password:</strong></label>
                    <input type="password" name="password" class="contact_input" />
                    </div> 

                    <div class="form_row">
                    <label class="contact"><strong>Email:</strong></label>
                    <input type="text" name="email" class="contact_input" />
                    </div>


                    <div class="form_row">
                    <label class="contact"><strong>Phone:</strong></label>
                    <input type="text" name="phone" class="contact_input" />
                    </div>
                    
                    
                    <div class="form_row">
                    <label class="contact"><strong>Address:</strong></label>
                    <input type="text" name="address" class="contact_input" />
                    </div>                    

                    <div class="form_row">
                        <div class="terms">
                        <input type="checkbox" name="terms" value="1" id="click_test" />
                        I agree to the <a href="#">terms &amp; conditions</a>                        </div>
                    </div> 

                    
                    <div class="form_row">
                    <input type="submit" class="register" value="register" name="submit"/>
                    </div>  
                    
                    
                    <div class="form_row" id="reg_result">
                   		<h3 id="username_err" class="user_error" style="display: none;color: red; text-align:center">INVALID USERNAME</h3>
                      <h3 id="email_err" class="email_error" style="display: none;color: red; text-align:center">INVALID EMAIL</h3>
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
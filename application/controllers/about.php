<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$header['header_title'] = 'MMS - About us';
		
		$string = 'test_val';
		
		$newdata['string'] = $string;
		$newdata = array(
                   'string'  => $string,
               );

		$this->session->set_userdata($newdata);
		
		<div class="left_content">
    <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title=""></span>About us</div>
        
    <div class="feat_prod_box_details">
		<p class="details">
    <img src="images/about.gif" alt="" title="" class="right"> 
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. <br><br>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.<br><br>
                
                                       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.         
		 </p>
            
            
    </div>	
            
              

            

            
    <div class="clear"></div>
    </div>
		
		echo $string;
		// views
		$this->load->view('header', $header);
		$this->load->view('about/index');
		$this->load->view('right_tab');
		$this->load->view('footer');
	}
}

/* End of file about.php */
/* Location: ./application/controllers/about.php */
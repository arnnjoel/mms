<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

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
		$header['header_title'] = 'MMS - My account';
		
		$string = 'test_val';
		
		$newdata['string'] = $string;
		$newdata = array(
                   'string'  => $string,
               );

		$this->session->set_userdata($newdata);
		
		echo $string;
		// views
		$this->load->view('header', $header);
		$this->load->view('about/index');
		$this->load->view('right_tab');
		$this->load->view('footer');
	}
}

/* End of file account.php */
/* Location: ./application/controllers/account.php */
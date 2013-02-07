<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

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
		$header['header_title'] = 'MMS - Register';
		$this->load->model('category');
		$this->load->model('product');
		
		$data['categories'] = $this->category->show();
		$data['best_seller'] = $this->product->best_seller(3);
		
		$string = 'test_val';
		
		$newdata['string'] = $string;
		$newdata = array(
                   'string'  => $string,
               );

		$this->session->set_userdata($newdata);
		
		//echo $string;
		// views
		$this->load->view('header', $header);
		$this->load->view('register/index', $data);
		$this->load->view('right_tab', $data);
		$this->load->view('footer');
	}
	
	public function add()
	{
		$this->load->model('user');
		
		if($this->user->add_user($_POST))
			redirect(base_url('register?reg=true&flag=1'));
	}
}

/* End of file register.php */
/* Location: ./application/controllers/register.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
		//currency_converter(200, 'PHP', 'USD');
		$header['header_title'] = 'MMS - Home';
		$this->load->model('product');
		$this->load->model('category');
		
		$data['featured'] = $this->product->featured_products(2);
		$data['new'] = $this->product->new_products(6);
		$data['categories'] = $this->category->show();
		
		$data['best_seller'] = $this->product->best_seller(3);
		
		// views
		$this->load->view('header', $header);
		$this->load->view('home/index', $data);
		$this->load->view('right_tab', $data);
		$this->load->view('footer');
	}
	
	public function contact()
	{
		$data['my_site'] = 'hello 123456';
		$header['header_title'] = 'page title';
		$footer['footer_value'] = '1234sdfds';
		
		
		$data = array(
					'my_site' => 'hello world',
					'name' => 'my name',
					);
		
		$this->load->view('header', $header);
		$this->load->view('home/contact', $data);
		$this->load->view('footer', $footer);
	}
	
	public function reg()
	{
		if(!empty($_POST))
		{
			$this->load->model('user');
			if($this->user->add_user($_POST) == true)
				redirect('home');
		}
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
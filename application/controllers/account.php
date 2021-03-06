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
		if($this->session->userdata('username'))
			redirect(base_url('account/edit'));
		
		if (!empty($_POST)) 
		{
			$this->load->model('user');
			$redirect = !empty($_GET['redirect']) ? $_GET['redirect'] : 'home';
			if($this->user->add_session($_POST))
				redirect(base_url($redirect));
		}
		
		$header['header_title'] = 'MMS - My account';
		$this->load->model('category');
		$this->load->model('product');
		
		$data['categories'] = $this->category->show();
		$data['best_seller'] = $this->product->best_seller(3);
		
	
		// views
		$this->load->view('header', $header);
		$this->load->view('account/index', $data);
		$this->load->view('right_tab', $data);
		$this->load->view('footer');
	}
	
	public function edit()
	{		
		if($this->session->userdata('username') == '')
			redirect(base_url('account'));
			
		$header['header_title'] = 'MMS - My account';
		
		$this->load->model('user');
		$this->load->model('category');
		$this->load->model('product');
		
		$data = $this->user->load_user($this->session->userdata('id'));
		$data['categories'] = $this->category->show();
		$data['best_seller'] = $this->product->best_seller(3);

		$this->load->view('header', $header);
		$this->load->view('account/edit', $data);
		$this->load->view('right_tab');
		$this->load->view('footer');
	}
	
	public function log_out()
	{
		$this->session->sess_destroy();
		redirect(base_url("home"));
	}
	
	public function update()
	{
		$this->load->model('user');
		if($this->user->update_user($_POST))
			redirect(base_url('account/edit?notify=success&type=profile'));
	}
}

/* End of file account.php */
/* Location: ./application/controllers/account.php */
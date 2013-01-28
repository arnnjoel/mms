<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checkouts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		if($this->session->userdata('admin') == '')
			redirect(base_url('admin/login'));
		$this->load->model('checkout');
	}
	
	public function index()
	{
		$this->show();
	}
	
	public function show()
	{
		$header['header_title'] = 'MMS - Admin Page';
		$data['checkout'] = $this->checkout->show();
		
		printr($data['checkout']);
		// views
		$this->load->view('admin/header', $header);
		//$this->load->view('admin/products/show', $data);
		$this->load->view('admin/footer');
	}
	
}
/* End of file contacts.php */
/* Location: /application/controllers/contacts.php */
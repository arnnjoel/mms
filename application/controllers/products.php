<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		if($this->session->userdata('admin') == '')
			redirect(base_url('admin/login'));
			
		$this->load->model('product');
		$this->load->model('category');
	}
	
	public function index()
	{
		$this->show();
	}
	
	public function show()
	{
		$header['header_title'] = 'MMS - Admin Page';
		$data['products'] = $this->product->show();
	
		// views
		$this->load->view('admin/header', $header);
		$this->load->view('admin/products/show', $data);
		$this->load->view('admin/footer');
	}
	
	public function add()
	{
		if(!empty($_POST))
		{
			if($this->product->add($_POST, $_FILES))
				redirect(base_url('admin/products'));
		}
		
		$data['categories'] = $this->category->show();
		$header['header_title'] = 'MMS - Admin Page';
		
		$this->load->view('admin/header', $header);
		$this->load->view('admin/products/add', $data);
		$this->load->view('admin/footer');
	}
	
	public function edit($id)
	{
		if(!empty($_POST))
		{
			if($this->product->edit($_POST, $id, $_FILES))
				redirect(base_url('admin/products'));
		}
		
		$header['header_title'] = 'MMS - Admin Page';
		$data = $this->product->show($id);
		$data['categories'] = $this->category->show();
		
		$this->load->view('admin/header', $header);
		$this->load->view('admin/products/edit', $data);
		$this->load->view('admin/footer');
	}
	
	public function delete($id)
	{
		$this->db->delete('products', array('id' => $id));
		redirect(base_url('admin/products'));
	}
	
}
/* End of file contacts.php */
/* Location: /application/controllers/contacts.php */